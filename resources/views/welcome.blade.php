@php use Illuminate\Support\Facades\Config;use Illuminate\Support\Facades\Session; use LaravelLang\LocaleList\Locale; @endphp
@php
    $locales = Config::get('app.supported_locales');
    $name = '';
    foreach(Locale::options() as $key => $value){
            if ($value === Config::get('app.locale')){
                $name = $key;
            }
    }
@endphp
<x-head session_name="none" user_id="none" test_id="none">
    <body class="font-[Tajawal] flex flex-col min-h-screen">
    @extends('components.loading-script')
    @section('js-content')
        <div class="block sm:block md:hidden lg:hidden xl:hidden 2xl:hidden">
            <img class="fixed z-50" src="{{asset('images/phones header.png')}}" alt="header">

            <img src="{{asset('images/landing1.svg')}}" alt="" class="mt-5">

            <iframe class="my-auto mx-auto"
                    src="https://www.youtube.com/embed/UrJaH9ODW6c?si=Fm78UZTO7IgA5KkD&autoplay=1&loop=1&amp;controls=0"
                    title="What is Nabeeh" frameborder="0"
                    allow="accelerometer; autoplay; loop; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            <img src="{{asset('images/landing2.svg')}}" alt="" class="overflow-y-scroll mt-5">

            <div class="relative mx-auto">
                <img src="{{asset('images/footer.png')}}" alt="footer">
                <div class="absolute top-10 grid-rows-3 space-y-10">
                    <div class="grid grid-cols-3 space-x-32 text-center mr-24">
                        <a href="mailto:info@nabeehtech.com" target="_blank">
                            <svg viewBox="0 0 48 48"
                                 width="30%"
                                 xmlns="http://www.w3.org/2000/svg"><title/>
                                <g data-name="8-Email"
                                   id="_8-Email">
                                    <path
                                        d="M45,7H3a3,3,0,0,0-3,3V38a3,3,0,0,0,3,3H45a3,3,0,0,0,3-3V10A3,3,0,0,0,45,7Zm-.64,2L24,24.74,3.64,9ZM2,37.59V10.26L17.41,22.17ZM3.41,39,19,23.41l4.38,3.39a1,1,0,0,0,1.22,0L29,23.41,44.59,39ZM46,37.59,30.59,22.17,46,10.26Z"/>
                                </g>
                            </svg>
                        </a>

                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="30%"
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

                        <a href="https://linktr.ee/nabeehtech" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40"
                                 viewBox="0 0 50 50">
                                <path
                                    d="M 9 4 C 6.2504839 4 4 6.2504839 4 9 L 4 41 C 4 43.749516 6.2504839 46 9 46 L 41 46 C 43.749516 46 46 43.749516 46 41 L 46 9 C 46 6.2504839 43.749516 4 41 4 L 9 4 z M 9 6 L 41 6 C 42.668484 6 44 7.3315161 44 9 L 44 41 C 44 42.668484 42.668484 44 41 44 L 9 44 C 7.3315161 44 6 42.668484 6 41 L 6 9 C 6 7.3315161 7.3315161 6 9 6 z M 14 11.011719 C 12.904779 11.011719 11.919219 11.339079 11.189453 11.953125 C 10.459687 12.567171 10.011719 13.484511 10.011719 14.466797 C 10.011719 16.333977 11.631285 17.789609 13.691406 17.933594 A 0.98809878 0.98809878 0 0 0 13.695312 17.935547 A 0.98809878 0.98809878 0 0 0 14 17.988281 C 16.27301 17.988281 17.988281 16.396083 17.988281 14.466797 A 0.98809878 0.98809878 0 0 0 17.986328 14.414062 C 17.884577 12.513831 16.190443 11.011719 14 11.011719 z M 14 12.988281 C 15.392231 12.988281 15.94197 13.610038 16.001953 14.492188 C 15.989803 15.348434 15.460091 16.011719 14 16.011719 C 12.614594 16.011719 11.988281 15.302225 11.988281 14.466797 C 11.988281 14.049083 12.140703 13.734298 12.460938 13.464844 C 12.78117 13.19539 13.295221 12.988281 14 12.988281 z M 11 19 A 1.0001 1.0001 0 0 0 10 20 L 10 39 A 1.0001 1.0001 0 0 0 11 40 L 17 40 A 1.0001 1.0001 0 0 0 18 39 L 18 33.134766 L 18 20 A 1.0001 1.0001 0 0 0 17 19 L 11 19 z M 20 19 A 1.0001 1.0001 0 0 0 19 20 L 19 39 A 1.0001 1.0001 0 0 0 20 40 L 26 40 A 1.0001 1.0001 0 0 0 27 39 L 27 29 C 27 28.170333 27.226394 27.345035 27.625 26.804688 C 28.023606 26.264339 28.526466 25.940057 29.482422 25.957031 C 30.468166 25.973981 30.989999 26.311669 31.384766 26.841797 C 31.779532 27.371924 32 28.166667 32 29 L 32 39 A 1.0001 1.0001 0 0 0 33 40 L 39 40 A 1.0001 1.0001 0 0 0 40 39 L 40 28.261719 C 40 25.300181 39.122788 22.95433 37.619141 21.367188 C 36.115493 19.780044 34.024172 19 31.8125 19 C 29.710483 19 28.110853 19.704889 27 20.423828 L 27 20 A 1.0001 1.0001 0 0 0 26 19 L 20 19 z M 12 21 L 16 21 L 16 33.134766 L 16 38 L 12 38 L 12 21 z M 21 21 L 25 21 L 25 22.560547 A 1.0001 1.0001 0 0 0 26.798828 23.162109 C 26.798828 23.162109 28.369194 21 31.8125 21 C 33.565828 21 35.069366 21.582581 36.167969 22.742188 C 37.266572 23.901794 38 25.688257 38 28.261719 L 38 38 L 34 38 L 34 29 C 34 27.833333 33.720468 26.627107 32.990234 25.646484 C 32.260001 24.665862 31.031834 23.983076 29.517578 23.957031 C 27.995534 23.930001 26.747519 24.626988 26.015625 25.619141 C 25.283731 26.611293 25 27.829667 25 29 L 25 38 L 21 38 L 21 21 z"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="text-center font-medium">{{__('extra.copyrights_saved')}} © 2024</div>
                    <div class="text-center font-medium">{{__('extra.privacy_policy')}}</div>
                </div>
            </div>
        </div>

        <div class="hidden sm:hidden md:block lg:block xl:block 2xl:block my-auto">
            <main class="container w-full mx-auto mb-10">
                <a href="{{route('welcome')}}">
                    <img src="{{asset('images/Logo.svg')}}"
                         class="mx-auto mt-5 w-1/6"
                         alt="logo"/>
                </a>

                <div class="w-full flex items-center mt-28 justify-between ">
                    <div class="w-1/2 space-y-28 justify-between items-center">
                        <p class="text-xl font-normal text-justify tracking-wide">
                            <span class="font-bold text-5xl text-[#6D6AB1]">{{__('extra.Nabeeh')}} </span>
                            <span>{{__('extra.nabeeh_content')}}</span>
                        </p>

                        <div class="w-1/2 mx-auto">
                            <form action="{{route('user.store')}}" method="post">
                                @csrf @method('post')
                                <x-primary-button class="w-full font-semibold">
                                    {{ __('extra.entering_to_test') }}
                                </x-primary-button>
                            </form>

                            <div class="flex gap-2 mx-auto mt-6 w-fit">
                                <svg class="w-6"
                                     data-name="Layer 1"
                                     id="Layer_1"
                                     viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Zm0-8.5a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0v-3A1,1,0,0,0,12,11.5Zm0-4a1.25,1.25,0,1,0,1.25,1.25A1.25,1.25,0,0,0,12,7.5Z"
                                        fill="#6D6AB1"/>
                                </svg>
                                <h1 class="font-normal text-base mt-1.5">{{__('extra.use_instructions')}}</h1>
                            </div>
                        </div>
                    </div>
                    <img src="{{asset('images/logo_bg.png')}}"
                         alt="bg"
                         class="w-1/2 -z-50 absolute {{(Config::get('app.locale') === 'ar' or Config::get('app.locale') === 'ur')? 'left-0': 'right-0'}}"

                    />
                </div>
            </main>

            <footer class="mt-20">

                <div x-data="{ open: false }" class="w-full">
                    <div @click="open = true"
                         class="container mx-auto w-full flex justify-end gap-3 align-middle content-center text-justify mb-5">
                        <svg viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg"
                             class="w-3">
                            <path
                                d="M81.8457,25.3876a6.0239,6.0239,0,0,0-8.45.7676L48,56.6257l-25.396-30.47a5.999,5.999,0,1,0-9.2114,7.6879L43.3943,69.8452a5.9969,5.9969,0,0,0,9.2114,0L82.6074,33.8431A6.0076,6.0076,0,0,0,81.8457,25.3876Z"/>
                        </svg>
                        <span class="mt-1 font-bold text-[#6D6AB1]">{{($name == 'Arabic')? 'العربية': $name}}</span>

                        <svg viewBox="0 0 24 24"
                             class="stroke-gray-300 stroke-[1.5] fill-none w-5"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12Z"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13 2.04932C13 2.04932 16 5.99994 16 11.9999C16 17.9999 13 21.9506 13 21.9506"
                                  stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11 21.9506C11 21.9506 8 17.9999 8 11.9999C8 5.99994 11 2.04932 11 2.04932"
                                  stroke="currentColor"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2.62964 15.5H21.3704" stroke="currentColor" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M2.62964 8.5H21.3704" stroke="currentColor" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>

                    <div x-show="open" @click.away="open = false"
                         class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
                        <div class="bg-white p-7 rounded-lg w-1/2">
                            <button @click="open = false"
                                    class="float-right">
                                <svg viewBox="0 0 200 200"
                                     class="w-5"
                                     xmlns="http://www.w3.org/2000/svg"><title/>
                                    <path
                                        d="M114,100l49-49a9.9,9.9,0,0,0-14-14L100,86,51,37A9.9,9.9,0,0,0,37,51l49,49L37,149a9.9,9.9,0,0,0,14,14l49-49,49,49a9.9,9.9,0,0,0,14-14Z"/>
                                </svg>
                            </button>
                            <div class="grid grid-cols-4 gap-y-2 text-left">
                                @foreach($locales as $lang => $value)
                                    @if($value === $name)
                                        <a class="font-bold text-[#6D6AB1]"> {{ ($value == 'Arabic')? 'العربية': $value}}</a>
                                    @else
                                        <a href="{{route('lang', ['locale' => $lang])}}"> {{ ($value == 'Arabic')? 'العربية': $value }}</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-5">
                <div
                    class="row text-base font-light grid grid-cols-3 justify-between content-center my-2 container mx-auto items-center">
                    <div class="text-start">{{__('extra.privacy_policy')}}</div>
                    <div class="text-center">{{__('extra.copyrights_saved')}} © 2024</div>
                    <div
                        class="grid grid-cols-6">
                        <a href="mailto:info@nabeehtech.com" class="flex justify-end col-end-5" target="_blank">
                            <svg viewBox="0 0 48 48"
                                 width="30%"
                                 xmlns="http://www.w3.org/2000/svg"><title/>
                                <g data-name="8-Email"
                                   id="_8-Email">
                                    <path
                                        d="M45,7H3a3,3,0,0,0-3,3V38a3,3,0,0,0,3,3H45a3,3,0,0,0,3-3V10A3,3,0,0,0,45,7Zm-.64,2L24,24.74,3.64,9ZM2,37.59V10.26L17.41,22.17ZM3.41,39,19,23.41l4.38,3.39a1,1,0,0,0,1.22,0L29,23.41,44.59,39ZM46,37.59,30.59,22.17,46,10.26Z"/>
                                </g>
                            </svg>
                        </a>

                        <a class="flex justify-end">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="30%"
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
                        </a>
                        <a class="flex justify-end" href="https://linktr.ee/nabeehtech" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                 viewBox="0 0 50 50">
                                <path
                                    d="M 9 4 C 6.2504839 4 4 6.2504839 4 9 L 4 41 C 4 43.749516 6.2504839 46 9 46 L 41 46 C 43.749516 46 46 43.749516 46 41 L 46 9 C 46 6.2504839 43.749516 4 41 4 L 9 4 z M 9 6 L 41 6 C 42.668484 6 44 7.3315161 44 9 L 44 41 C 44 42.668484 42.668484 44 41 44 L 9 44 C 7.3315161 44 6 42.668484 6 41 L 6 9 C 6 7.3315161 7.3315161 6 9 6 z M 14 11.011719 C 12.904779 11.011719 11.919219 11.339079 11.189453 11.953125 C 10.459687 12.567171 10.011719 13.484511 10.011719 14.466797 C 10.011719 16.333977 11.631285 17.789609 13.691406 17.933594 A 0.98809878 0.98809878 0 0 0 13.695312 17.935547 A 0.98809878 0.98809878 0 0 0 14 17.988281 C 16.27301 17.988281 17.988281 16.396083 17.988281 14.466797 A 0.98809878 0.98809878 0 0 0 17.986328 14.414062 C 17.884577 12.513831 16.190443 11.011719 14 11.011719 z M 14 12.988281 C 15.392231 12.988281 15.94197 13.610038 16.001953 14.492188 C 15.989803 15.348434 15.460091 16.011719 14 16.011719 C 12.614594 16.011719 11.988281 15.302225 11.988281 14.466797 C 11.988281 14.049083 12.140703 13.734298 12.460938 13.464844 C 12.78117 13.19539 13.295221 12.988281 14 12.988281 z M 11 19 A 1.0001 1.0001 0 0 0 10 20 L 10 39 A 1.0001 1.0001 0 0 0 11 40 L 17 40 A 1.0001 1.0001 0 0 0 18 39 L 18 33.134766 L 18 20 A 1.0001 1.0001 0 0 0 17 19 L 11 19 z M 20 19 A 1.0001 1.0001 0 0 0 19 20 L 19 39 A 1.0001 1.0001 0 0 0 20 40 L 26 40 A 1.0001 1.0001 0 0 0 27 39 L 27 29 C 27 28.170333 27.226394 27.345035 27.625 26.804688 C 28.023606 26.264339 28.526466 25.940057 29.482422 25.957031 C 30.468166 25.973981 30.989999 26.311669 31.384766 26.841797 C 31.779532 27.371924 32 28.166667 32 29 L 32 39 A 1.0001 1.0001 0 0 0 33 40 L 39 40 A 1.0001 1.0001 0 0 0 40 39 L 40 28.261719 C 40 25.300181 39.122788 22.95433 37.619141 21.367188 C 36.115493 19.780044 34.024172 19 31.8125 19 C 29.710483 19 28.110853 19.704889 27 20.423828 L 27 20 A 1.0001 1.0001 0 0 0 26 19 L 20 19 z M 12 21 L 16 21 L 16 33.134766 L 16 38 L 12 38 L 12 21 z M 21 21 L 25 21 L 25 22.560547 A 1.0001 1.0001 0 0 0 26.798828 23.162109 C 26.798828 23.162109 28.369194 21 31.8125 21 C 33.565828 21 35.069366 21.582581 36.167969 22.742188 C 37.266572 23.901794 38 25.688257 38 28.261719 L 38 38 L 34 38 L 34 29 C 34 27.833333 33.720468 26.627107 32.990234 25.646484 C 32.260001 24.665862 31.031834 23.983076 29.517578 23.957031 C 27.995534 23.930001 26.747519 24.626988 26.015625 25.619141 C 25.283731 26.611293 25 27.829667 25 29 L 25 38 L 21 38 L 21 21 z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </footer>
        </div>

    @endsection
    </body>
</x-head>
