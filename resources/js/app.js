import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start()

const canvas = document.getElementById('canvas');
const context = canvas.getContext('2d')
let lineWidth = 0
let isMousedown = false
let points = []
let rawData1 = [];

let start = false;
let StartTime;
let isDrawingSessionActive = true;

let StrokeDuration = [];
let TimePenUp = 0;
let TimePenDown = 0;

canvas.width = window.innerWidth * 2
canvas.height = window.innerHeight * 2
context.canvas.style.touchAction = "none";
const strokeHistory = []


function drawOnCanvas(stroke) {
    context.strokeStyle = 'black'
    context.lineCap = 'round'
    context.lineJoin = 'round'

    const l = stroke.length - 1
    if (stroke.length >= 3) {
        const xc = (stroke[l].x + stroke[l - 1].x) / 2
        const yc = (stroke[l].y + stroke[l - 1].y) / 2
        context.lineWidth = stroke[l - 1].lineWidth
        context.quadraticCurveTo(stroke[l - 1].x, stroke[l - 1].y, xc, yc)
        context.stroke()
        context.beginPath()
        context.moveTo(xc, yc)
    } else {
        const point = stroke[l];
        context.lineWidth = point.lineWidth
        context.strokeStyle = point.color
        context.beginPath()
        context.moveTo(point.x, point.y)
        context.stroke()
    }
}

for (const ev of ['pointerdown']) {
    canvas.addEventListener(ev, function (e) {
        if (isDrawingSessionActive && e.pointerType === 'pen') {

            isMousedown = true

            if (!start) {
                StartTime = Date.now();
            }
            start = true;

            TimePenDown = Date.now();

            let pressure = 0.1;
            let x, y;
            if (e.touches && e.touches[0] && typeof e.touches[0]["force"] !== "undefined") {
                if (e.touches[0]["force"] > 0) {
                    pressure = e.touches[0]["force"]
                }
                x = e.touches[0].pageX * 2
                y = e.touches[0].pageY * 2
            } else {
                pressure = 1.0
                x = e.pageX * 2
                y = e.pageY * 2
            }

            lineWidth = 10;
            points.push({x, y, lineWidth, timestamp: Date.now()});
            drawOnCanvas(points);
        }
    })
}

for (const ev of ['pointermove']) {
    canvas.addEventListener(ev, function (e) {
            if (isDrawingSessionActive && e.pointerType === 'pen') {

                if (!isMousedown) return
                let timestamp = Date.now(); //TimeNow

                let pressure = 0.1
                let x, y
                if (e.touches && e.touches[0] && typeof e.touches[0]["force"] !== "undefined") {
                    if (e.touches[0]["force"] > 0) {
                        pressure = e.touches[0]["force"]
                    }
                    x = e.touches[0].pageX * 2
                    y = e.touches[0].pageY * 2
                } else {
                    pressure = 1.0
                    x = e.pageX * 2
                    y = e.pageY * 2
                }

                lineWidth = 10;

                points.push({x, y, lineWidth, timestamp: Date.now()});
                drawOnCanvas(points);

                rawData1.push([
                    e.clientX,
                    e.clientY,
                    e.altitudeAngle, e.azimuthAngle,
                    e.tiltX, e.tiltY,
                    e.pressure,
                    timestamp
                ]);

            }
        }
    )
}

for (const ev of ['pointerup', 'pointerleave']) {
    canvas.addEventListener(ev, function (e) {
            if (isDrawingSessionActive && e.pointerType === 'pen' && isMousedown) {
                TimePenUp = Date.now();
                let TPD = (TimePenUp - TimePenDown);

                StrokeDuration.push(TPD);

                let pressure = 0.1;
                let x, y;

                if (e.touches && e.touches[0] && typeof e.touches[0]["force"] !== "undefined") {
                    if (e.touches[0]["force"] > 0) {
                        pressure = e.touches[0]["force"]
                    }
                    x = e.touches[0].pageX * 2
                    y = e.touches[0].pageY * 2
                } else {
                    pressure = 1.0
                    x = e.pageX * 2
                    y = e.pageY * 2
                }

                isMousedown = false
                strokeHistory.push([points]);
                points = []
                lineWidth = 0
            }
        }
    )
}

document.addEventListener('DOMContentLoaded', function () {


    // try to make train page counter different
    let countdown;
    const pageUrl = window.location.pathname;

    // Check if the URL is for train.blade.php
    if (pageUrl.includes('train')) {
        countdown = 320;
    }
    // Check if the URL is for test.blade.php
    else {
        countdown = 50;
    }


    
    let interval = setInterval(() => {
        countdown--;
        if (countdown <= 0) {
            clearInterval(interval);
            isDrawingSessionActive = false;


            let rawData = rawData1.map((row, index) => {
                let strokeDurationValue = StrokeDuration[index] !== undefined ? StrokeDuration[index] : 0;
                return [...row, strokeDurationValue];
            });


            points = []
            lineWidth = 0

            localStorage.setItem('rawData', JSON.stringify(rawData));
            document.getElementById('submit_btn').click(); // Trigger the click
        }
    }, 1000);
});

document.getElementById('submit_btn').addEventListener('click', function (event) {
    if (sessionStorage.getItem('testID') === '12') {
        fetch('/append-to-s3', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            },
            body: JSON.stringify({
                rawData: localStorage.getItem('rawData'),
                sessionName: sessionStorage.getItem('sessionName'),
                sampleID: sessionStorage.getItem('sampleID')
            }),
        })
            .then(response => response.json())
            .then(data => {
                localStorage.removeItem('rawData');
            })
            .catch(error => {
                console.error('Error:', error);
            });
    } else {
        fetch('/append-to-csv', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            },
            body: JSON.stringify({
                rawData: localStorage.getItem('rawData'),
                sessionName: sessionStorage.getItem('sessionName'),
                sampleID: sessionStorage.getItem('sampleID')
            }),
        })
            .then(response => response.json())
            .then(data => {
                localStorage.removeItem('rawData');
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
});
