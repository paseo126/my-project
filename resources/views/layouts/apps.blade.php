<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Portofolio</title>
        <!-- Favicon-->
        {{-- <link rel="icon" type="image/x-icon" href="{{ asset('/') }}assets/favicon.ico" /> --}}
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('/') }}assets/css/styles.css" rel="stylesheet" />
        <link href="{{ asset('/') }}assets/libs/aos/css/aos.css" rel="stylesheet" />

        <script>
            const APP_URL = "{{ asset('/') }}";
            const _token = "{{ csrf_token() }}";
        </script>
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @include('layouts.navbar')
            <!-- Header-->
            @yield('content')
        </main>
        <!-- Footer-->
        @include('layouts.footer')
        <!-- Bootstrap core JS-->
        <script src="{{ asset('/') }}assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/aos/js/aos.js"></script>
        <script src="{{ asset('/') }}assets/libs/validate-js/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('/') }}assets/js/scripts.js"></script>

        @yield('btm-script')
    </body>
</html>
