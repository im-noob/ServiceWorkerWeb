@extends('main')
@section('home')
		<section class="hero-area">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="block">
                        <h1 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" >Best Service Provider Of your City</h1>
                        <p class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" >Get Instant service provider in your affordable Price.</p>
                       
                        <div class="row">
                            <div class = "col-sm-3">   
                            </div>
                            <div class = "col-sm-2" >
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Choose City
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Bhagalpur</a>
                                        <a class="dropdown-item" href="#">Patna</a>
                                        <a class="dropdown-item" href="#">Purniya</a>
                                    </div>
                                </div>
                            </div>
                            <div class ="col-sm-7">
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <br>
    <section>   
        <div class= "card">   
            <br>
            <h3 style= " text-align:center;margin-top:5px;">Recomended Services</h3>  
            <div class= "container" >
            @for($i = 0 ; $i < 5 ; $i++)
                <h4>{{$data[$i][1]}}</h4>
                <div class="row">
                    <div class = "col-lg-11">
                        <div class="row">
                            @for($j=0; $j < 4 ; $j++)
                                <div class = "col-md-3">
                                    <img  src="{{url('/')}}/images/company/gallery-1.jpg" class="rounded img1" alt="Cinque Terre">
                                    <p>{{$data[$i][2][$j]->subcat_name}}</p>
                                </div> 
                            @endfor
                        </div>
                    </div>
                    <div class = "col-lg-1">
                        <span style="font-size:25px"><i class="fas fa-arrow-circle-right"></i></span>
                    </div>
                </div>
            @endfor
        </div>
        </div>
    </section>
    <br>
    <section>
        <div class="card">
        <div class="container">
            <div class="d-flex justify-content-center mb-3">
                <div class="p-2 "><h3>Customer Review</h3></div>
            </div>
            <div class="row">
                @foreach($feedback as $msg)
                <div class = "col-md-4">
                    <div class="card">
                    <div class ="container">
                        <div class = "row">
                            <div class="col-md-6">
                                <img src="{{$msg->wpic}}" class="rounded povView" alt="UserPic">
                            </div>
                            <div class="col-md-6">
                                <span style="font-size:20px;color:black;">{{$msg->cname}}</span><br>
                                <span style="font-size:16px;color:black;">{{$msg->city}}</span><br>
                                <span style="font-size:10px;color:red;">{{$msg->updated_at}}</span>
                            </div>
                        </div>
                        <hr>
                        <p>{{$msg->feedback}}.</p>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{$msg->pic}}" class="rounded povView" alt="ServicePic">
                            </div>
                            <div class="col-sm-8">
                                <span style="font-size:18px;color:blue;">{{$msg->name}}</span><br>
                                <span style="font-size:14px;color:black;background-color:green"> {{$msg->ratting}}* </span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div> 
                @endforeach
            </div>
        </div>
        <br>
        </div>
    </section>
    <br>
    <section>
        <div class="card">
            <div class = "container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="p-2 "><img src="{{url('/')}}/images/company/gallery-1.jpg" class="rounded img1" alt="Cinque Terre"></div>
                    </div>
                    <div class="col-sm-6">
                        <br>
                        <h2>Download the App</h2>
                        <p>Get the book of 100+ service provider in your pocket</p>
                        <div class="row">
                            <div class="col-sm-6">
                                    <img src="{{url('/')}}/images/google-play.png" class="rounded" alt="Cinque Terre">
                            </div>
                            <div class="col-sm-6">
                                    <img src="{{url('/')}}/images/app-store.png" class="rounded" alt="Cinque Terre">
                            </div>          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="myModal">
    	<div class="modal-dialog modal-md">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">SingIn / SignUp</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class = "authHeading" >
            <h3>Ganga Service</h3>
            <h6>Get service on your home</h6>
            <div id="authId">
                <form>
                    <div class="form-group">
                        <input type = "number" class="form-control" id="authPhoneNo"  placeholder="Enter Your Mobile No." required>
                    </div>
                </form>
                <button type="button" class="btn btn-primary" onclick= "changeData()" >Contineoue</button>
            </div>
            </div>
            <br>
        </div>  
      </div>
		</div>
	</div>
		

	<div class="modal fade" id="service" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Our Service</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
					<div class="row">
							<div class="col-md-6">
								<h4>Category</h4>
								<div class="list-group" id="list-tab" role="tablist">
										@php
											$i = 0;
										@endphp
										@foreach($category as $msg)
											@if($i++ == 0)
												<a class="list-group-item list-group-item-action active cat" id="{{$msg->wor_cat_id}}" data-toggle="list" href="#subcat" role="tab" aria-controls="prince">{{$msg->wor_cat_name}}</a>
											@else
												<a class="list-group-item list-group-item-action cat" id="{{$msg->wor_cat_id}}" data-toggle="list" href="#subcat" role="tab" aria-controls="prince">{{$msg->wor_cat_name}}</a>
											@endif
										@endforeach
									</div>
							</div>
							<div class="col-md-6">
								<div id="subcat">
									<h4>Subcategory</h4>
									<div class="list-group" id="list-cat" role="tablist">
										@foreach($subcat as $msg)
											<a class="list-group-item list-group-item-action" href="{{url('/hire/'.$msg->wor_subcat_id.'/')}}" >{{$msg->subcat_name}}</a>	
										@endforeach
									</div>
								</div>
							</div>
					</div>
				</div>  
      </div>
		</div>
		</div>
		<script type="text/javascript">
		
        function changeData(){
            
            console.log('Method Called');
            var mobileno = $('#authPhoneNo').val();

            if(parseInt(mobileno) && mobileno.length == 10){

                $.ajax({
                    url:'{{url('/')}}/generateOtp',
                    data:{"mobileno":mobileno},
                    type:'GET'
                }).done(function(data){
                    console.log(data);
                    $('#authId').empty();
                    var form = document.createElement("FORM");
                    var template = '<div class="form-group">'+
                                    '<input type = "text" class="form-control" name="otp"  placeholder="Enter OTP">'+
                                    '<br><button type="submit"  class="btn btn-primary form-control" >Verify OTP</button>'+
                                    '</div>';
                    $(form).attr("action","{{url('/')}}/profile");
                    $(form).attr("method","get");
                    $(form).html(template);
                    $('#authId').append($(form));
                   // $('#authId').append('<p>Time :  <span id ="time">00:00</span></p>');
                });
            }
            else{
                alert('Not a valid Number.');
            }
		}

		</script>
		<script type="text/javascript">
        $(document).ready(function(){
            console.log("Profile Open : ",$('#login1').text());
            $('#login1').text("Login/SignUp");
            $('#logout').text("");

            document.getElementById('login1').removeAttribute("href")        

            $('body').on('click','.cat',function(){
                var id = $(this).attr('id');
                console.log('Clicked On table',id);
                $.ajax({
                        url:'{{url('/')}}/selectSub',
                        data:{"form_id":id},
                        type:'GET'
                }).done(function(data){
                    //console.log(JSON.parse(data));
                    $('#list-cat').empty();
                    for (const msg of JSON.parse(data)) {
                        console.log(msg.wor_subcat_id);
                        var template = '<a class="list-group-item list-group-item-action" href="'+'{{url("/hire/")}}/'+msg.wor_subcat_id+'">'+msg.subcat_name+'</a>';
                        console.log(template);
                        $('#list-cat').append(template);
                    }
                });
            });			
        });
    </script>
@endsection