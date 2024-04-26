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
<footer class="mt-auto">

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

    <hr class="phones:mb-2">
    <div
        class="text-base font-light tablet:grid tablet:grid-cols-3 phones:flex phones:flex-col-reverse phones:gap-y-5 phones:m-0 justify-between content-center my-2 container mx-auto items-center">
        <div class="text-start">{{__('extra.privacy_policy')}}</div>
        <div class="text-center">{{__('extra.copyrights_saved')}} © 2024</div>
        <div class="flex flex-row-reverse gap-8 phones:justify-center">
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