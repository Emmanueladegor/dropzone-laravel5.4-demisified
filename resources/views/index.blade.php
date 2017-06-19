<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
	<link href=" https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body>	

	<div class="container">

		<div class="jumbotron">
		<div class="row">
		
		</div>
			<center><h2 style="color:#337ab7;">Multiple Image Upload with remove link + Saving Image Name to database using Dropzone Js and Laravel 5.4 DEMISIFIED </h2></center><br>
			<form action="{{route('store.products')}}" class="dropzone"  id="my-dropzone">
				{{csrf_field()}}
			</form>
			<button class="btn btn-primary" id="submit-all">Submit all files</button>
		</div>

	</div>



	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
	<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
