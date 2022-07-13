<!DOCTYPE html>
<html lang="en">

<!-- Encabezado de la pagina -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <title>ERP G&C - @yield('title')</title>

</head>

<!-- Cuerpo de la pagina -->
<body>

    @section('sidebar')
        <!--This is the master sidebar.-->
    @show

    <div class="container p-1">
	
		The current UNIX timestamp is {{ time() }}.

        @yield('content')
		
    </div>
</body>

    <!-- Pie de la pagina -->
    <footer class="page-footer font-small cyan darken-3">

        @yield('footer')

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 ">
            <a href="https://innovatecgyc.com/">© 2022 Copyright. Innovaciones Tecnologicas G&C</a-->
        </div>
        <!-- Copyright -->

    </footer>

</html>