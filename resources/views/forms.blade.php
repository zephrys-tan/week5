<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body> 
<div class="container">
	<div class="row">
		<div class="col-lg-12">
				<form action="" method="post" class="form-horizontal">
				{{csrf_field()}}
					<div class="form-group"> 
						<label for="nama">Nama</label> 
						<input type="text" class="form-control" name="nama"   @if(isset($nama)) value={{$nama}} @endif>
					</div>

					<div class="form-group"> 
						<label for="email">Email</label> 
						<input type="email" class="form-control" name="email"  @if(isset($email)) value={{$email}} @endif>
					</div>

					<div class="form-group"> 
						<label for="gender">Jenis Kelamin</label> <br>
						<input type="radio"  value="male" name="gender" @if(isset($gender) && $gender=="male") checked @endif >Male <br>
						<input type="radio"  value="female" name="gender" @if(isset($gender) && $gender=="female") checked @endif >Female

					</div>
					
					<div class="form-group"> 
						<label for="weapon[]">Your Weapon</label> <br>
						<input type="checkbox" value="Lancerta Beam Saber" name="weapon[]" @if(isset($weapon) && in_array('Lancerta Beam Saber',$weapon)) checked @endif>Lancerta Saber <br>
						<input type="checkbox" value="DOTS Rifle" name="weapon[]"  @if(isset($weapon) && in_array('DOTS Rifle',$weapon)) checked @endif>DOTS Rifle <br>
						<input type="checkbox" value="Fin Funnel " name="weapon[]"  @if(isset($weapon) && in_array('Fin Funnel',$weapon)) checked @endif>Fin Funnel 
					</div>
					<button type="submit" class="btn btn-warning">Submit</button>
				</form>

				@if(isset($nama))
			 	Hallo,{{$nama}}
			 	@endif

			 	<br>
			 	@if(isset($email))
			 	Your Email {{$email}}
			 	@endif
			 	<br>
			 	@if(isset($gender))
			 	Your gender is {{$gender}}
			 	@endif
			 	<br>
			 	@if(isset($weapon))
			 	Your picked weapon:  <br>
				 	@foreach($weapon as $item)
					 	 ->{{ ucwords($item) }}<br>
				 	@endforeach
			 	@endif
		</div>
	</div>
</div>

 <script type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>