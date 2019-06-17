@extends('main')
@section('home')
	<section class="home-view">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="block">
                        <h1 style="text-align:center;color:white; margin-top: 15%;" >Best Service Provider Of your City Bhagalpur</h1>
                        <h3  style="text-align:center;color:white; margin: 5%;" >Get Instant service provider in your affordable Price.</h3>
                        {{-- <div class="alert alert-success" role="alert" id="searchResultSuccess">Search Somthing..</div> --}}
                        <div class="row">
                            <div class = "col-md-6 col-sm-6 form-group">
                                <select id="cityListDropDown" style="width: 100%; padding: 0.3em;     height: 130%;" class="col-xl-10 d-flex custom-select custom-select-sm">
                                    <option value="-1" hidden>Choose Area</option>
                                    @forelse($cityName as $city)
                                        <option value="{{$city->arealist_id}}" class="dropdown-item" href="#">{{$city->area_city_name}}</option>
                                    @empty
                                        <option  value="0">Bhagalpur</option>
                                    @endforelse
                                </select>   
                            </div>
                            
                            {{-- <div class = "col-sm-2" >
                                <div class="dropdown" id="dropdownDiv">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="cityListDropDownButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Choose Area
                                    </button>
                                   
                                </div>
                            </div> --}}



                            <div class ="col-md-6 col-sm-6 col-md-*">
                                {{-- <form class="form-inline" action="{{ url('/')}}/hire/search/"> --}}
                                    <input class="form-control col-xl-10 d-flex justify-content-start" type="search" placeholder="Search service" aria-label="Search" id="searchBox">
                                {{-- </form> --}}
                            </div>
                        </div>
                        <div class="alert alert-danger" role="alert" id="searchResult">Search Somthing..</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- CardList:START 
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3" >
                    <a href="{{url('/')}}/shopsalun" style="text-decoration: none" >
                        <div class="advCard">
                            <i class="fas fa-cut fa-rotate-270 fa-2x" style="font-size: 3em;"></i>
                            <div class="mt-3">NearBy Saloon</div>
                            <i class="fas fa-long-arrow-alt-right fa-2x arrowOnadvCard"></i>
                        </div>
                    </a> 
                </div>
                <div class="col-sm-6 col-md-3" >
                    <a href="{{url('/')}}/Institution" style="text-decoration: none" >
                        <div class="advCard">
                            <i class="fas fa-graduation-cap fa-2x" style="font-size: 3em;"></i>
                            <div class="mt-3">Institution</div>
                            <i class="fas fa-long-arrow-alt-right fa-2x arrowOnadvCard"></i>
                        </div>
                    </a>                    
                </div>
                <div class="col-sm-6 col-md-3" >
                    <a href="{{url('/')}}/softwareService" style="text-decoration: none" >
                        <div class="advCard">
                            <i class="fas fa-microchip fa-2x" style="font-size: 3em;"></i>
                            <div class="mt-3">Software</div>
                            <i class="fas fa-long-arrow-alt-right fa-2x arrowOnadvCard"></i>
                        </div>
                    </a>                    
                </div>
                <div class="col-sm-6 col-md-3" >
                    <a href="{{url('/')}}/contact" style="text-decoration: none" >
                        <div class="advCard">
                            <i class="fas fa-award fa-2x" style="font-size: 3em;"></i>
                            <div class="mt-3">Contact Us</div>
                            <i class="fas fa-long-arrow-alt-right fa-2x arrowOnadvCard"></i>
                        </div>
                    </a>                    
                </div>
            </div>
        </div>
    </section>
    --}}


    {{-- CardList:STOP --}}
    <section>   
        <div class= "card">   
            <br>
            <H2 style= "text-align:center;margin-top:25px; font-weight: 800; ">Recomended Services</H2>  

            <div class="container">
                
            
            

                @for($i = 0 ; $i < sizeof($data) ; $i++)
                    <h4 class="mt-5 " style="
                        font-weight: 600;
                        color: #242424;"
                    >{{$data[$i][1]}}</h4>
                    
                    <div class="row scrollbar-ripe-malinka " style="display: flex;flex-wrap: nowrap;overflow-x: auto;">
                        @for($j=0; $j < sizeof($data[$i][2]) ; $j++)                    
                            <div class="col-5 col-md-3 col-lg-3 col-xl-3" style="padding-right: 5px; padding-left: 5px;    padding-bottom: 10px;">
                                <div class = "card shadow-lg p-1 bg-white rounded">
                                        <a 
                                            href="{{url('/hire/home/'.$data[$i][2][$j]->wor_subcat_id.'/')}}" 
                                            style="color:#343434; text-decoration:none"    
                                        >
                                         
                                      <img  
                                            src="{{url('founder/')}}/public/{{$data[$i][2][$j]->pic}}" 
                                            onerror="this.src = 'https://i.imgur.com/e2Ji5su.jpg';"
                                            class="rounded img1 img-responsive" 
                                            alt="{{$data[$i][2][$j]->subcat_name}} gangaservices"
                                            style="overflow: hidden;-radius: 4px;height: 100px;"
                                        >
                                        <div style="font-weight: 600; margin-block-start: 10px;">{{$data[$i][2][$j]->subcat_name}}</div>
                                    </a>
                                </div> 
                            </div>
                        @endfor 
                        
                    </div>
                    
                @endfor


            
            </div>
        </div>
    </section>


    
    <section>
        <a href="{{url('/')}}/shopsalun">
            <div class="">
                <div class="card bg-dark text-white" style="height: 8em; background-image:  url('{{url('/')}}/images/saloon.webp'); " >
                    <div class="card-img-overlay" style="text-align: center;">
                        
                            <h2 style= "color:white">Local Salon Available Click To see </h2>
                        
                    </div>
                </div>
            </div>
        </a>
    </section>
    

    {{-- Feed Back --}}
    <section class="caintiner" style="margin: 4em">
        <div class="d-flex justify-content-center mb-3">
            <H2 style= "text-align:center;margin-top:5px; font-weight: 800; ">Customer Review</H2>  
            
        </div>
        <div class="row">
            @foreach ($feedback as $item)
                <div class="col-sm-4 mb-4">
                    <div class="card" style="border-radius: 8px">
                        <div class="card-body">
                            <h5 class="card-title">
                            <img src="{{url('founder/')}}/public/{{$item->cuspic}}" alt="{{$item->cname}} gangaservices.com" onerror="this.src = 'https://i.imgur.com/QtXcFQM.png';" height="48" width="48"/><span style="margin: 10px">{{$item->cname}}</span>
                            </h5>
                            <p class="card-text" style="color: #646464;">{{{$item->feedback}}}</p>
                            <div class="card-text" style=" font-weight: 800">
                                    <span style="color: #00aced;">Ratting</span>
                                    <span style="background-color: #4caf50;color:white; padding: 2px;">{{$item->ratting}}<i class="fas fa-star"></i></span>

                            </div>
                            <hr>
                            <p class="card-text" style="letter-spacing: .9px;
                                    color: #949494;
                                    margin-top: 20px;
                                    font-size: 10px;
                                    font-weight: 600;
                                    text-transform: uppercase;">Professional Hired
                            </p>
                            <h5 class="card-title">
                            <img src="{{url('founder/')}}/public/{{$item->worpic}}" onerror="this.src = 'https://i.imgur.com/QtXcFQM.png';" alt="{{$item->name}} gangaservices" height="48" width="48"/>
                                <span style="margin: 10px">{{$item->name}}</span>
                            </h5>
                            
                        </div>
                    </div>
        
                </div>
            @endforeach
            


            

        </div>
    </section>


    {{-- Quick Register:START --}}
    <section>
        <div class="card">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <a style="text-decoration: none; " href="{{url('/')}}/regPartner"><H2 style= "text-align:center;margin-top:5px; font-weight: 800; ">Are you intrested to work with Us ? Just Make a query</H2></a>  
                </div>
            </div>
        </div>
    </section>
    {{-- Quick Register:END --}}

    


    <section>
        <div class="card">
            <div class = "container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="p-2 "><img src="{{url('/')}}/images/company/gallery-1.webp" class="rounded img1 img-fluid" alt="Download Android app gangaservices"></div>
                    </div>
                    <div class="col-sm-6">
                        <br>
                        <h2>Download the App</h2>
                        <p>Get the book of 100+ service provider in your pocket</p>
                        <div class="row">
                            <div class="col-sm-12">
                                    <a href="https://play.google.com/"><img src="{{url('/')}}/images/google-play.png" class="rounded" alt="gangaservices app on playstore"></a>
                            </div>
                            {{-- <div class="col-sm-6">
                                    <img src="{{url('/')}}/images/app-store.png" class="rounded" alt="gangaservices app on playstore">
                            </div>           --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    
	<script type="text/javascript">	
        // function changeData(){
            
        //     console.log('Method Called');
        //     var mobileno = $('#authPhoneNo').val();

        //     if(parseInt(mobileno) && mobileno.length == 10){

        //         $.ajax({
        //             url:'{{url('/')}}/generateOtp',
        //             data:{"mobileno":mobileno},
        //             type:'GET'
        //         }).done(function(data){
        //             console.log(data);
        //             $('#authId').empty();
        //             var form = document.createElement("FORM");
        //             var template = '<div class="form-group">'+
        //                             '<input type = "text" class="form-control" name="otp"  placeholder="Enter OTP">'+
        //                             '<br><button type="submit"  class="btn btn-primary form-control" >Verify OTP</button>'+
        //                             '</div>';
        //             $(form).attr("action","{{url('/')}}/profile");
        //             $(form).attr("method","get");
        //             $(form).html(template);
        //             $('#authId').append($(form));
        //             // $('#authId').append('<p>Time :  <span id ="time">00:00</span></p>');
        //         });
        //     }
        //     else{
        //         alert('Not a valid Number.');
        //     }
        // }
    </script>

      {{-- Search Plugin --}}
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="{{url('/')}}/js/searchable.js"></script>
    <script type="text/javascript">
        $url ="{{url('/')}}";
        $("#searchResult").hide();
    </script>
    {{-- Search Plugin --}}
    
	<script type="text/javascript">
        $(document).ready(function(){

            //focusing search box
            $("#searchBox").focus();
            
            $('#searchBox').bind("keypress", function(e){
                // 'Go' key code is 13
                if (e.which === 13) {
                    $baseURL = "{{url('/')}}/hire/search/";
                    $searchText = $(this).val().trim();
                    if($searchText>0){
                        window.location.href = $baseURL+$searchText;
                    }
                    
                } 
            });
            	
        });
    </script>
@endsection