@props(['session_name'])
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
    <link rel="stylesheet" href="{{asset('build/assets/app-d2126611.css')}}">

    {{--    @vite(['resources/js/app.js', 'resources/css/app.css'])--}}

    {{--    <!-- Scripts -->--}}
    <script src="{{asset('build/assets/app-2a3232bf.js')}}" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script defer src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/fabric@5.2.4/dist/fabric.min.js"></script>


    <script>sessionStorage.setItem('sessionName', '{{$session_name}}')</script>

</head>
{{$slot}}
</html>
