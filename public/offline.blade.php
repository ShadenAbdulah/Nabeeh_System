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
    <body class="font-[Tajawal] flex flex-col min-h-screen bg-gray-100 dark:bg-gray-900">
    @extends('components.loading-script')
    @section('js-content')
        <main class="flex flex-col space-y-20 my-auto">
            <div
                class="flex items-center mt-32 justify-center sm:items-center sm:pt-0">
                <div class="max-w-xl mx-auto">
                    <div class="flex items-center pt-10 sm:justify-start sm:pt-0">
                        <div class="px-4 text-lg text-gray-500 border-l border-gray-400 tracking-wider">
                            404
                        </div>

                        <div class="mr-4 text-lg text-gray-500 uppercase tracking-wider">
                            ليس لديك اتصال بالانترنت
                        </div>
                    </div>
                </div>
            </div>
            <x-primary-button class="w-1/5 mx-auto py-2 my-0">{{__('extra.back_to_home_page')}}</x-primary-button>
        </main>
        <x-lg-footer class="bg-white"></x-lg-footer>
    @endsection
    </body>
</x-head>
