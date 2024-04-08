@props(['session_name', 'sample_id', 'test_id'])
    <!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('Logo.png') }}">
    <link rel="manifest" href="{{asset('manifest.json')}}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{--    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"--}}
    {{--    rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset('build/assets/app-eab06b2f.css')}}">

    {{--    @vite(['resources/js/app.js', 'resources/css/app.css'])--}}

    {{--    <!-- Scripts -->--}}
    <script src="{{asset('build/assets/app-e6727550.js')}}" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script defer src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/fabric@5.2.4/dist/fabric.min.js"></script>


    <script>sessionStorage.setItem('sessionName', '{{$session_name}}');
        sessionStorage.setItem('sampleID', '{{$sample_id}}');
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
