<!DOCTYPE html>
<html>
	<head>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<title>@yield('title')</title>
	</head>

	<body>
		<div class="container">

			<nav>
				<div class="nav-wrapper">
					<a href="#" class="brand-logo center">Job</a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="sass.html"></a></li>
						<li><a href="badges.html"></a></li>
						<li><a href="collapsible.html"></a></li>
					</ul>
				</div>
			</nav>

			<div>
				@yield('content')
			</div>

		</div>

		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		
	</body>
</html>