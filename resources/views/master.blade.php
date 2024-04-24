<!DOCTYPE HTML>
<html lang="es-ES">
<head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    <section>
        <main>
            <h1 class='centrado'>@yield('main_title')</h1><br>
            @section('content')
            @show
        </main>
		<aside>
            @yield('aside')
        </aside>
	</section>
	<footer>
        @yield('footer')
    </footer>
</body>
</html>