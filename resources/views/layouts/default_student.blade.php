<!doctype html>

<html>

<head>

    @include('includes.head')

</head>

<body>

    <div class="container-fluid noPadd">

        <header">

            @include('includes.nav_student')

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