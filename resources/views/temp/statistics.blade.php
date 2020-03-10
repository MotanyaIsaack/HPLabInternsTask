
<!DOCTYPE html>
<html>
	<head>
		<title>HP_Statistics</title>
		<link rel="icon" href="{{ URL::asset('php.png') }}" type="image/x-icon"/>
		<script src="{{asset('js/app.js')}}"></script>
		<script src="{{asset('js/bootstrap.js')}}"></script>
		<script src="{{asset('js/style.js')}}"></script>
		<script src="{{asset('js/slim.js')}}"></script>
		<script src="{{asset('js/popper.js')}}"></script>
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
	</head>
	<body class="p-0 container-fluid">
		<nav class="navbar navbar-dark bg-dark">

			<a href="#" class="navbar-brand">
				 <img width="30%" height="30%" src="php.png">
          		<script>{{ asset('img/php.png') }}</script>
			</a>

			<div class=" justify-content-end">
				<a href="logout"><button class="btn btn-light" style="background-color:white; color:black" >Log Out</button></a>
			</div>
		</nav>
		<div class="container-fluid p-0">
			<div class="row">

				<div class="col-2 bg-secondary side-menu">
					<div class="hover">
						<a href="statistics" id="active-menu" style="color:white"><b>Statistics</b></a>
					</div>

					<div class="hover">
						<a href="students" style="color:white">Students</a>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>
