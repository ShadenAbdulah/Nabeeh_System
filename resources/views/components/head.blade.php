@php use Illuminate\Support\Facades\Config;use Illuminate\Support\Facades\Session;
$dir = (Config::get('app.locale') === 'ar' or Config::get('app.locale') === 'ur')? 'rtl':'ltr';
@endphp
@props(['session_name', 'user_id', 'test_id'])
    <!DOCTYPE html>
<html dir={{$dir}} lang="{{Session::get('locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('Logo.png') }}">
    <link rel="manifest" href="{{asset('manifest.json')}}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="{{asset('build/assets/app-bb3c736c.css')}}">
    <link href="{{asset('please-wait.css')}}" rel="stylesheet">

    {{--    <!-- Scripts -->--}}
    <script defer src="{{asset('build/assets/app-76f5901f.js')}}"></script>
    <script defer src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/fabric@5.2.4/dist/fabric.min.js"></script>

    <script>sessionStorage.setItem('sessionName', '{{$session_name}}');
        sessionStorage.setItem('userID', '{{$user_id}}');
        sessionStorage.setItem('testID', '{{$test_id}}');</script>

    <!-- PWA -->
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if ("serviceWorker" in navigator) {
            // Register a service worker hosted at the root of the
            // site using the default scope.
            navigator.serviceWorker.register("/sw.js").then(
                (registration) => {
                    console.log("Service worker registration succeeded:", registration);
                },
                (error) => {
                    console.error(`Service worker registration failed: ${error}`);
                },
            );
        } else {
            console.error("Service workers are not supported.");
        }
    </script>
</head>
{{$slot}}
</html>
