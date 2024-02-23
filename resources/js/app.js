/////////////////////////////////////////////////////////////////////////////
///////////
///////////                      WORKS PERFECT!
///////////     I SOLVED THE WRITING ISSUSE AFTER COUNTDOWND ENDS
///////////
/////////////////////////////////////////////////////////////////////////////

import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start()

const canvas = document.getElementById('canvas');
const context = canvas.getContext('2d')
let lineWidth = 0
let isMousedown = false
let points = []
let Instantaneous_Velocity = 0;
let acceleration = 0;
let rawData = [];
let countdown = 50;

let TimeSec = 0;
let start = false;
let StartTime;
let isDrawingSessionActive = true;

canvas.width = window.innerWidth * 2
canvas.height = window.innerHeight * 2
context.canvas.style.touchAction = "none";
const strokeHistory = []

const requestIdleCallback = window.requestIdleCallback || function (fn) {
    setTimeout(fn, 1)
};

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

function calculateDistance(point1, point2) {
    return Math.sqrt(Math.pow(point2.x - point1.x, 2) + Math.pow(point2.y - point1.y, 2));
}

function calculateInstantaneousVelocity(stroke) {
    const numPoints = stroke.length;
    if (numPoints < 2) {
        return 0; // Drawing speed is not meaningful with less than two points
    }

    const firstPoint = stroke[0];
    const lastPoint = stroke[numPoints - 1];

    const distance = calculateDistance(firstPoint, lastPoint);

    const timeElapsed = (lastPoint.timestamp - firstPoint.timestamp) / 1000; // Convert milliseconds to seconds

    return distance / timeElapsed;
}

function calculateAcceleration(stroke) {
    const numPoints = stroke.length;
    if (numPoints < 3) {
        return 0; // Acceleration is not meaningful with less than three points
    }

    const firstPoint = stroke[0];
    const middlePoint = stroke[Math.floor(numPoints / 2)];
    const lastPoint = stroke[numPoints - 1];

    const initialVelocity = calculateInstantaneousVelocity([firstPoint, middlePoint]);
    const finalVelocity = calculateInstantaneousVelocity([middlePoint, lastPoint]);

    const timeElapsed = (lastPoint.timestamp - firstPoint.timestamp) / 1000; // Convert milliseconds to seconds

    return (finalVelocity - initialVelocity) / timeElapsed;
}


for (const ev of ['pointerdown']) {
    canvas.addEventListener(ev, function (e) {
        if (isDrawingSessionActive && e.pointerType === 'pen') {
            // if (e.pointerType === 'pen') {
            isMousedown = true

            if (!start) {
                StartTime = Date.now();
            }
            start = true;


            let tilt = {x: e.tiltX, y: e.tiltY};
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


            lineWidth = e.pressure * 3 * Math.abs(tilt.x) * 0.2 + lineWidth * 0.8;

            points.push({x, y, lineWidth, timestamp: Date.now()});

            drawOnCanvas(points);
        }
    })
}

for (const ev of ['pointermove']) {
    canvas.addEventListener(ev, function (e) {
            if (isDrawingSessionActive && e.pointerType === 'pen') {
                if (!isMousedown) return
                var tilt = {x: e.tiltX, y: e.tiltY};
                let timestamp = Date.now(); //TimeNow
                TimeSec = (timestamp - StartTime) / 1000;

                // console.log(TimeSec , timestamp)
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

                lineWidth = e.pressure * 3 * Math.abs(tilt.x);
                points.push({x, y, lineWidth, timestamp: Date.now()});
                drawOnCanvas(points);

                // this calculates the Magnitude without the direction
                acceleration = Math.abs(calculateAcceleration(points));
                Instantaneous_Velocity = calculateInstantaneousVelocity(points);


                rawData.push([
                    e.clientX, // Raw Feature No. 1
                    e.clientY, // Raw Feature No. 2
                    Instantaneous_Velocity, // Feature No. 5 & 6
                    acceleration, // Feature No.7 & 8
                    e.altitudeAngle, e.azimuthAngle,
                    e.tiltX, e.tiltY, // Feature No. 9 ~ 12
                    e.pressure, // Feature No. 13~20
                    TimeSec,
                    timestamp
                ]);

                // requestIdleCallback(() => {

                //     localStorage.setItem('rawData', JSON.stringify(rawData));
                //     // console.log('idle', rawData.length)

                // })

            }
        }
    )
}

for (const ev of ['pointerup', 'pointerleave']) {
    canvas.addEventListener(ev, function (e) {
            if (isDrawingSessionActive && e.pointerType === 'pen') {

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
    // console.log('children:', document.getElementById('body').children.namedItem('test_form'));
    let interval = setInterval(() => {
        countdown--;
        console.log(countdown); // Optional: for debugging to see the countdown in the console.
        if (countdown <= 0) {
            clearInterval(interval); // Stop the interval
            isDrawingSessionActive = false; // Gracefully end the drawing session

            // isMousedown = false
            points = []
            lineWidth = 0

            localStorage.setItem('rawData', JSON.stringify(rawData));
            document.getElementById('submit_btn').click(); // Trigger the click
        }
    }, 1000);
});

document.getElementById('submit_btn').addEventListener('click', function (event) {
    fetch('/append-to-csv', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
        body: JSON.stringify({
            rawData: localStorage.getItem('rawData'),
            sessionName: sessionStorage.getItem('sessionName')
        }),
    })
        .then(response => response.json())
        .then(data => {
            console.log(data.message);
            console.log('after sent', localStorage.getItem('rawData').length)
            localStorage.removeItem('rawData');
            localStorage.clear();
        })
        .catch(error => {
            console.error('Error:', error);
        });
});
