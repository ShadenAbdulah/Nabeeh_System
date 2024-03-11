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

<body class="font-[Tajawal] mx-auto">
<main class="mb-32 mx-auto">
    <img src="{{asset('images/info_bg.png')}}"
         class="absolute -z-50 w-5/6"
         alt=""/>
    <img src="{{asset('images/Logo.svg')}}"
         class="w-1/6 p-16 mx-auto"
         alt=""/>
    <div class="mx-auto">
        <div class="container mx-auto py-10 px-20">
            <form class="w-2/5 float-end shadow-2xl shadow-[#6E65E8]/10 p-10 rounded-3xl content-center"
                  method="POST" action="{{ route('object.store') }}"
                  translate="yes"
                  novalidate>
                @method("post") @csrf
                <h1 class="font-bold text-2xl text-center mb-16">البيانات الشخصية</h1>
                <x-text-input id="name"
                              class="block mt-1 w-full my-16"
                              value="{{(old('name'))?old('name'):null}}"
                              type="text"
                              name="name"
                              placeholder="الاســم (اختياري)"/>

                <div class="flex my-16">
                    <div class="flex justify-between w-full tracking-wide">
                        <label class="font-semibold ml-5">الجنــــــس</label>
                        <div>
                            <input type="radio"
                                   id="female"
                                   name="gender"
                                   value="female"
                            >
                            <label for="female"
                                   class="mr-1 ml-5">أنثــى</label></div>
                        <div>
                            <input type="radio"
                                   id="male"
                                   name="gender"
                                   value="male">
                            <label for="male"
                                   class="mr-1">ذكــر</label>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('gender')"
                                   class="absolute mt-8"/>
                </div>

                <div class="flex justify-between">
                    <div class="flex w-2/6">
                        <x-text-input id="age"
                                      name="age"
                                      value="{{(old('age'))?old('age'):null}}"
                                      class="block w-full"
                                      required
                                      type="number"
                                      min="1" max="100"
                                      step="1"
                                      placeholder="العمــر"/>

                        <x-input-error :messages="$errors->get('age')"
                                       class="absolute my-14"/>
                    </div>

                    <div class="w-3/6">
                        <x-primary-button class="w-full flex justify-between font-medium">
                            {{ __('بدء التدريب') }}
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="w-1/5 fill-white">
                                <title/>
                                <g data-name="Layer 2" id="Layer_2">
                                    <path
                                        d="M10.1,23a1,1,0,0,0,0-1.41L5.5,17H29.05a1,1,0,0,0,0-2H5.53l4.57-4.57A1,1,0,0,0,8.68,9L2.32,15.37a.9.9,0,0,0,0,1.27L8.68,23A1,1,0,0,0,10.1,23Z"/>
                                </g>
                            </svg>
                        </x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<div class="absolute bottom-0  items-center mx-auto w-full">

    <footer class="mx-auto">
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
</div>
</body>
</html>
