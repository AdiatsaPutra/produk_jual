<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('owlcarousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('owlcarousel/owl.theme.default.min.css') }}">
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        <title>Toko Online</title>
    </head>

    <body>
        @include('utilities.navbar')
        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
        </script>
        <script src="{{ asset('jquery.js') }}"></script>
        <script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>
        <script>
            $(document).ready(function () {
                $("#carousel-top").owlCarousel({
                    margin: 20,
                    margin: 10,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        600: {
                            items: 3,
                        },
                    }
                });
                $("#carousel-category-top").owlCarousel({
                    margin: 10,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        600: {
                            items: 3,
                        },
                        1500: {
                            items: 5,
                        }
                    }
                });
            });

        </script>
    </body>

</html>