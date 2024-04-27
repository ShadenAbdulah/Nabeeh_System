<x-head session_name="none" user_id="none" test_id="none">

    <body class="font-[Tajawal] flex flex-col min-h-screen">
    @extends('components.loading-script')
    @section('js-content')

        <main class="container w-full mx-auto my-auto">
            <a href="{{route('welcome')}}">
                <img src="{{asset('images/Logo.svg')}}"
                     class="mx-auto mt-10 w-1/6"
                     alt="logo"/>
            </a>

            @yield('content')
        </main>

        <x-lg-footer></x-lg-footer>
    @endsection
    </body>
</x-head>
