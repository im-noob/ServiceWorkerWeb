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
			<h2 class="signup-active">GangaServices.com</h2>
			<div>
			
			
			
					@if(session()->has('newDevC'))	
						<div class="alert alert-success">
							<strong>{{Session::get('newDevC')}}</strong>	
						</div>
					@endif
					
					@foreach ($errors->all() as $message) 
						<div class="alert alert-danger"> 
							<strong>{{$message}}</strong>
						</div>
					@endforeach
			</div>

			@if(!session()->has('newDevC'))
				

					<form method="POST" action="{{url('/')}}/regPartnerSubmit">
						@csrf
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
											<input type="text" class="form-control" placeholder="Your Name" name="name" value="{{ old('name') }}" required>
										</div>
									</div>

									<div class="row align-items-center mt-4">
										<div class="col">
										<input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
										</div>
									</div>


									<div class="row align-items-center mt-4">
										<div class="col">
											<input type="number" inputmode="numeric" class="form-control" placeholder="Primary Contact" name="number1" value="{{old('number1')}}" required>
										</div>
										<div class="col">
										<input type="number" inputmode="numeric" class="form-control" placeholder="Secondry Contact" name="number2" value="{{old('number2')}}">
										</div>
									</div>

									<hr>

									<div class="row align-items-center  form-check mt-4">
										<div>Select Gender</div>
										<div class="col   form-check">
												<input class="form-check-input" type="radio" name="gender" id="male" value="male" >		
												<label class="form-check-label" for="male">
													Male
												</label>
										</div>
										<div class="col  form-check">
												<input class="form-check-input" type="radio" name="gender" id="female" value="female">		
												<label class="form-check-label" for="female">
													Female
												</label>
										</div>
									</div>
									
									<hr>



									<div class="row align-items-center">
										<div class="col mt-4">
											<textarea class="form-control" id="addressBox" rows="3" placeholder="Address" name="address" required >{{old('address')}}</textarea>
										</div>
									</div>

									<hr>


									<div class="row justify-content-start form-check mt-4">
										<div>Select The Area where you can provide Service?</div>

										<div class="col">
												@forelse($areaName as $area)
													<label class="form-check-label mt-4 col-sm-3">
														<input type="checkbox" class="form-check-input" name="areaName[]" value="{{$area->arealist_id}}">{{$area->area_name}} 
													</label>
												@empty
													<label class="form-check-label  mt-4 col-sm-3">
														<input type="checkbox" class="form-check-input" name="areaName[]" value="-1">Bahgalpur
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
												<input type="text" id="workname" inputmode="latin-name" class="form-control" placeholder="Work Name">
										</div>
										<div class="col-sm-4">
												<input type="number" id="workPrice" inputmode="latin-name" class="form-control" placeholder="cost">
										</div>
										<div class="col-sm-2">
											<button type="button" class="btn btn-primary"  id="addWorkList">+ ADD</button>
										</div>
									</div>

									<div id="workpriceDIV" class="row align-items-center mt-4 text-white bg-primary mb-3" style="">
										<div class="col" id="workListDiv">
											<div class="card-header">Work Name</div>
										</div>
										<div class="col" id="priceListDiv">
											<div class="card-header">Price</div>
										</div>
									</div>
									<input type="hidden" name="workListArr" id="workListArr" value=""/>
									<div class="row align-items-center">
										<div class="col mt-4">
											<textarea class="form-control" id="remarksBox" rows="3" placeholder="remarks" name="remarks">{{old('remarks')}}</textarea>
										</div>
									</div>

									<div class="row justify-content-start mt-4">
										<div class="col">
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="tandc"  required>
													I Read and Accept <a href="https://www.gangaservices.com">Terms and Conditions</a>
												</label>
											</div>

											<button class="btn btn-primary mt-4" type="submit">Submit</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
			@endif
			
		</div>

		<script>
			$(function(){

					$workList = [];
					$("#workpriceDIV").hide();
					$("#addWorkList").click(function(){
						$("#workpriceDIV").show();

						// collecting value
						$workName = $("#workname").val();
						$workPrice = $("#workPrice").val();
						
						// adding to list
						$("#workListDiv").append('<div class="card-text">'+$workName+'</div>');
						$("#priceListDiv").append('<div class="card-text">'+$workPrice+'</div>');
						
						// putting blank vlue
						$("#workname").val("");
						$("#workPrice").val("");
						$listObj = {
							workName:$workName,
							workPrice:$workPrice,
						}

						//pushing to main array 
						$workList.push($listObj);

						//making json
						$jsonWorkList = JSON.stringify($workList);

						// puting json in feilds
						$("#workListArr").val($jsonWorkList);
						console.log($listObj);
						console.log($workList);
						// console.log("workname,price",$workName,$workPrice);
					})
			})
		</script>
</body>
</html>