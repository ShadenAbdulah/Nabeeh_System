<x-head session_name="none">
    <body class="antialiased font-[Tajawal] bg-gray-100">
    <div class="min-h-screen">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main class="container mx-auto">
            {{ $slot }}
        </main>
    </div>
    <script src="//code.tidio.co/ezsfqsgyyipukrpjydnf93ukblflrhzv.js" async></script>
    </body>
</x-head>
