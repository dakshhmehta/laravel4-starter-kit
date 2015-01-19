<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ url('assets/bs3/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ url('assets/bs3/css/bootstrap-theme.min.css') }}" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<!-- Header -->
				<h1>{{ $name }}</h1>
			</div>
		</div>
		@yield('content')
	</div>

	<script src="{{ url('assets/bs3/js/jquery.1.10.2.min.js') }}"></script>
	<script src="{{ url('assets/bs3/js/bootstrap.min.js') }}"></script>
</body>
</html>