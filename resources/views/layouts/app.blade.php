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
    <x-loading-script>
        @section('content')

            <main class="container w-full mx-auto my-auto">
                <a href="{{route('welcome')}}">
                    <img src="{{asset('images/Logo.svg')}}"
                         class="mx-auto mt-10 tablet:w-1/6 phones:w-1/3"
                         alt="logo"/>
                </a>

                @yield('content')
            </main>

            <x-lg-footer></x-lg-footer>
        @endsection
    </x-loading-script>
    </body>
</x-head>
