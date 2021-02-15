<!doctype html>

<html>

<head>

    @include('includes.head')

</head>

<body>

    <div class="container-fluid noPadd">

        <header class="">

            @include('includes.header')

        </header>

        <section>

            @yield('content')

        </section>

        <footer>

            @include('includes.footer')

        </footer>

    </div>

</body>

</html>