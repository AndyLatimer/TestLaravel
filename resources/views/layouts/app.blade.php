<html>
	<head>
		<title>Proyecto - @yield('title')</title>
	</head>
	<body>
		@section('sidebar')	
			Esto es un sidebar
		@show

	<div class="contenedor">
		@yield('content')
	</div>
	</body>

</html>
