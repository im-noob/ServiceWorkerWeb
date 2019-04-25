<!DOCTYPE html>
<html>
<head>
	
	    
			<meta name="theme-color" content="#2874f0"/>
			<meta name="keywords" content="GangaService, GangaServices,beauty, decoration, Service, Bahgalpur, Saloon, online, etc"/>
			<meta name="google-site-verification" content="GXUqCRblVI0vfyaIcsSyTu8VIF5_ak8O8i67KGg0cNA" />

			<!-- Required meta tags -->
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />

			<title>GangaServices</title>

			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"/>
			<link rel="stylesheet" href="{{url('/')}}/css/style.css"/>
			<link rel="stylesheet" href="{{url('/')}}/css/mainpage.css" />

			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>

			<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	

</head>

		<div class="container">
			<h2 class="signup-active">sarkariformbharo.com</h2>
			<div>
			
			
			
					@if(session()->has('newDevC'))	
						<div class="alert alert-success">
							<strong>{{Session::get('newDevC')}}</strong>	
						</div>
					@endif
					<!-- email all ready in use -->
					@if(session()->has('emailused'))
						<div class="alert alert-danger"> 
									<strong>{{Session::get('emailused')}}</strong>
						</div>
					@endif
						
					@if($errors->has('Devname'))
						<div class="alert alert-danger"> 
							<strong> {{$errors->first('Devname')}}</strong>                 
						</div>
					@endif

					@if($errors->has('fathername'))
						<div class="alert alert-danger"> 
							<strong> {{$errors->first('fathername')}}</strong>                 
						</div>
					@endif

					@if($errors->has('email'))
						<div class="alert alert-danger"> 
							<strong> {{$errors->first('email')}}</strong>                 
						</div>
					@endif

					@if($errors->has('phone'))
						<div class="alert alert-danger"> 
							<strong> {{$errors->first('phone')}}</strong>                 
						</div>
					@endif

					@if($errors->has('college'))
						<div class="alert alert-danger"> 
							<strong> {{$errors->first('college')}}</strong>                 
						</div>
					@endif
			</div>

			@if(!session()->has('newDevC'))
				

					<section>
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-12 col-md-8 col-lg-8 col-xl-6">
									<div class="row">
										<div class="col text-center">
											<h1>Register to become a Partner</h1>
											<p class="text-h3">Ganga Services Team Welcomes you to be a partner. </p>
										</div>
									</div>


									<div class="row align-items-center">
										<div class="col mt-4">
											<input type="text" class="form-control" placeholder="Your Name">
										</div>
									</div>

									<div class="row align-items-center mt-4">
										<div class="col">
											<input type="email" class="form-control" placeholder="Email">
										</div>
									</div>


									<div class="row align-items-center mt-4">
										<div class="col">
											<input type="number" inputmode="numeric" class="form-control" placeholder="Primary Contact">
										</div>
										<div class="col">
											<input type="number" inputmode="numeric" class="form-control" placeholder="Secondry Contact">
										</div>
									</div>

									<hr>

									<div class="row align-items-center  form-check mt-4">
										<div>Select Gender</div>
										<div class="col   form-check">
												<input class="form-check-input" type="radio" name="exampleRadios" id="male" value="" checked>		
												<label class="form-check-label" for="male">
													Male
												</label>
										</div>
										<div class="col  form-check">
												<input class="form-check-input" type="radio" name="exampleRadios" id="female" value="">		
												<label class="form-check-label" for="female">
													Female
												</label>
										</div>
									</div>
									
									<hr>



									<div class="row align-items-center">
										<div class="col mt-4">
											<textarea class="form-control" id="addressBox" rows="3" placeholder="Address"></textarea>
										</div>
									</div>

									<hr>


									<div class="row justify-content-start form-check mt-4">
										<div>Select The Area where you can provide Service?</div>

										<div class="col">

												@forelse($cityName as $city)
													<label class="form-check-label mt-4 col-sm-3">
														<input type="checkbox" class="form-check-input">{{$city->city_name}}
													</label>
												@empty
													<label class="form-check-label  mt-4 col-sm-3">
														<input type="checkbox" class="form-check-input">Bahgalpur
													</label>
												@endforelse
												
										</div>
									</div>

									<hr>
									<div class="row align-items-center mt-4">
										<div class="col">
											<div>Please Add your Work List With Price:</div>
										</div>
									</div>
									<div class="row align-items-center mt-4">
										<div class="col-sm-6">
												<input type="text" inputmode="latin-name" class="form-control" placeholder="Work Name">
										</div>
										<div class="col-sm-4">
												<input type="number" inputmode="latin-name" class="form-control" placeholder="cost">
										</div>
										<div class="col-sm-2">
											<button class="btn btn-primary">+ ADD</button>
										</div>
									</div>
									<div class="row align-items-center">
										<div class="col mt-4">
											<textarea class="form-control" id="remarksBox" rows="3" placeholder="remarks"></textarea>
										</div>
									</div>

									<div class="row justify-content-start mt-4">
										<div class="col">
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-check-input">
													I Read and Accept <a href="https://www.gangaservices.com">Terms and Conditions</a>
												</label>
											</div>

											<button class="btn btn-primary mt-4">Submit</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
			@endif
			
		</div>
</body>
</html>