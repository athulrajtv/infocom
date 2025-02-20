<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Infocom</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('guest.layouts.links')

    </head>

    <body class="yl-home">

        @include('guest.layouts.header')

        <!-- preloader - start -->
        <div id="yl-preloader"></div>
        <div class="up">
            <a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
        </div>

        @yield('body')

        @include('guest.layouts.footer')

        @include('guest.layouts.scripts')

    </body>

</html>