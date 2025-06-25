<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Lembaga Pemeriksa Halal Pusat Hahal Insan Kamil
    </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo3.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <style>
        #bg-image {
            position: relative;
            background-image: url('/img/slide1.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2rem;
            color: white;
            transition: background-image 1s ease-in-out;
        }

        #bg-footer {
            position: relative;
            background-image: url('/img/bg-menu.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 30vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2rem;
            color: white;
            /* warna teks agar kontras */
        }

        #bg-menu {
            position: relative;
            background-image: url('/img/slide2.jpeg');
            /* background-image: url('https://fastly.picsum.photos/id/912/400/200.jpg?hmac=A8Tgnae0SdlffCjD8tpcLDYw0l7ZwOFd9w5EUFiJQfU'); */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 30vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2rem;
            color: white;
            /* warna teks agar kontras */
        }

        #bg-menu::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: #1b1d1bcc;
            /* warna hijau transparan */
            z-index: 1;
        }

        #bg-footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: #0e3500bb;
            /* warna hijau transparan */
            z-index: 1;
        }

        #bg-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: #0e3500bb;
            /* warna hijau transparan */
            z-index: 1;
        }

        /* bungkus teks agar di atas overlay */
        .text-wrapper {
            position: relative;
            z-index: 2;
            max-width: 800px;
        }

        .text-wrapper-1 {
            position: relative;
            z-index: 2;
            /* max-width: 1000px; */
        }


        .playfair {
            font-family: "Playfair Display", serif;
            font-weight: 500;
            /* atau 400, 700, dll. */
            font-style: normal;
            /* atau italic */
        }

        .work-sans {
            font-family: "Work Sans", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .text-default {
            color: #093500d7
        }

        .bg-primary {
            background-color: #093500cc !important
        }

        .btn-default {
            background-color: #0935009f !important
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
</head>

<body>
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
    @stack('scripts')
</body>

</html>
