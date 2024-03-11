<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{asset('build/assets/app-94119bbe.css')}}">

    <!-- Scripts -->
    <script src="{{asset('build/assets/app-7b456d99.js')}}" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script defer src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/fabric@5.2.4/dist/fabric.min.js"></script>
</head>

<body class="font-[Tajawal]">
<main class="mb-32">
    <img src="{{asset('images/welcome_BG.png')}}"
         alt="bg"
         class="absolute -z-50 top-1/3 p-10 -left-20 mr-52 w-1/2">

    <div class="container w-full mx-auto">
        <img src="{{asset('images/Logo.svg')}}"
             class="w-1/4 mx-auto p-20">

        <div class="w-1/2">
            <p class="w-full right-0 my-20 text-xl font-normal text-justify">
                <span class="font-bold text-5xl text-[#6D6AB1]">نَبيــه </span> هو أداة مساعدة أولية للتشخيص عن
                اضطراب فرط الحركة وتشتت الانتباه
                عن طريق تحليل خط اليد باستخدام
                أنماط محددة،
                يستغرق الاختبار 10 دقائق تقريبًا.
                إن النتيجة التي ستظهر لك في
                النهاية هي مجرد احتمالية وتعتمد
                على
                تنبؤات الذكاء الاصطناعي.
            </p>

            <div class="w-1/2 mx-auto">
                <a href="{{route('info')}}">
                    <x-primary-button class="w-full font-semibold">
                        {{ __('الدخول للإختبــــار') }}
                    </x-primary-button>
                </a>

                <div class="flex gap-2 mx-auto my-6 w-fit">
                    <svg class="w-6"
                         data-name="Layer 1"
                         id="Layer_1"
                         viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Zm0-8.5a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0v-3A1,1,0,0,0,12,11.5Zm0-4a1.25,1.25,0,1,0,1.25,1.25A1.25,1.25,0,0,0,12,7.5Z"
                            fill="#6D6AB1"/>
                    </svg>
                    <h1 class="font-normal text-base mt-1.5">تعليمات الاستخدام</h1>
                </div>
            </div>
        </div>
    </div>
</main>

<footer>
    <hr>
    <div class="text-base font-light grid grid-cols-3 my-2 container mx-auto">
        <div class="text-start">سيــاسة الخصوصيــة</div>
        <div class="text-center">جميـع الحقوق محفوظــة © 2024</div>
        <div class="flex flex-row-reverse gap-8">
            <svg viewBox="0 0 48 48"
                 width="5%"
                 xmlns="http://www.w3.org/2000/svg"><title/>
                <g data-name="8-Email"
                   id="_8-Email">
                    <path
                        d="M45,7H3a3,3,0,0,0-3,3V38a3,3,0,0,0,3,3H45a3,3,0,0,0,3-3V10A3,3,0,0,0,45,7Zm-.64,2L24,24.74,3.64,9ZM2,37.59V10.26L17.41,22.17ZM3.41,39,19,23.41l4.38,3.39a1,1,0,0,0,1.22,0L29,23.41,44.59,39ZM46,37.59,30.59,22.17,46,10.26Z"/>
                </g>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg"
                 width="5%"
                 viewBox="0 0 1200 1227"
                 fill="none">
                <g clip-path="url(#clip0_1_2)">
                    <path
                        d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z"
                        fill="black"/>
                </g>
                <defs>
                    <clipPath id="clip0_1_2">
                        <rect width="1200"
                              height="1227"
                              fill="white"/>
                    </clipPath>
                </defs>
            </svg>

            <svg style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                 viewBox="0 0 512 512"
                 width="5%"
                 xml:space="preserve"
                 xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M373.295,307.064c-6.37,-3.188 -37.687,-18.596 -43.526,-20.724c-5.838,-2.126 -10.084,-3.187 -14.331,3.188c-4.246,6.376 -16.454,20.725 -20.17,24.976c-3.715,4.251 -7.431,4.785 -13.8,1.594c-6.37,-3.187 -26.895,-9.913 -51.225,-31.616c-18.935,-16.89 -31.72,-37.749 -35.435,-44.126c-3.716,-6.377 -0.397,-9.824 2.792,-13c2.867,-2.854 6.371,-7.44 9.555,-11.16c3.186,-3.718 4.247,-6.377 6.37,-10.626c2.123,-4.252 1.062,-7.971 -0.532,-11.159c-1.591,-3.188 -14.33,-34.542 -19.638,-47.298c-5.171,-12.419 -10.422,-10.737 -14.332,-10.934c-3.711,-0.184 -7.963,-0.223 -12.208,-0.223c-4.246,0 -11.148,1.594 -16.987,7.969c-5.838,6.377 -22.293,21.789 -22.293,53.14c0,31.355 22.824,61.642 26.009,65.894c3.185,4.252 44.916,68.59 108.816,96.181c15.196,6.564 27.062,10.483 36.312,13.418c15.259,4.849 29.145,4.165 40.121,2.524c12.238,-1.827 37.686,-15.408 42.995,-30.286c5.307,-14.882 5.307,-27.635 3.715,-30.292c-1.592,-2.657 -5.838,-4.251 -12.208,-7.44m-116.224,158.693l-0.086,0c-38.022,-0.015 -75.313,-10.23 -107.845,-29.535l-7.738,-4.592l-80.194,21.037l21.405,-78.19l-5.037,-8.017c-21.211,-33.735 -32.414,-72.726 -32.397,-112.763c0.047,-116.825 95.1,-211.87 211.976,-211.87c56.595,0.019 109.795,22.088 149.801,62.139c40.005,40.05 62.023,93.286 62.001,149.902c-0.048,116.834 -95.1,211.889 -211.886,211.889m180.332,-392.224c-48.131,-48.186 -112.138,-74.735 -180.335,-74.763c-140.514,0 -254.875,114.354 -254.932,254.911c-0.018,44.932 11.72,88.786 34.03,127.448l-36.166,132.102l135.141,-35.45c37.236,20.31 79.159,31.015 121.826,31.029l0.105,0c140.499,0 254.87,-114.366 254.928,-254.925c0.026,-68.117 -26.467,-132.166 -74.597,-180.352"/>
                </svg>
        </div>
    </div>
</footer>

</body>

</html>
