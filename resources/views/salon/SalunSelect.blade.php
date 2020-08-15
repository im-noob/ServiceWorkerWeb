@component('components.beforeloadingAnimation')
@endcomponent

@extends('main')
@section('SalonSelect')
<section class="bodyView">
    <div class="card">
        <div class="container ">


                <h3>Search Salon near you.</h3>
                <div class="row">
                    
                    <div class = "col-md-6 col-sm-6 form-group">
                        <select id="cityListDropDownForSaloon"   class="custom-select custom-select-sm">
                            <option value="-1" hidden>Choose Area</option>
                            @forelse($cityName as $city)
                                <option value="{{$city->arealist_id}}" class="dropdown-item" href="#">{{$city->area_city_name}}</option>
                            @empty
                                <option  value="0">Bhagalpur</option>
                            @endforelse
                        </select>   
                    </div>
                    <div class="col-sm-6">
                            <div class="form-group">
                                <button id="searchForShop"  class="form-control btn btn-primary  btn-block" ><i class="fas fa-search"> Search</i></button>
                            </div>
                    </div>
                    
                </div>
        </div>


        <div class="card">
            <div class="container" >
                <div class="card-hrader">
                    <h4>Local Salon List</h4>
                </div>
                <div id="shopListArea" class="row">
                        @forelse ($saloonshoplist as $shop)
                            

                                {{-- <div class="col-sm-6">
                                    <a href="{{url('/shopdetails/'.$shop->shop_id.'/')}}"  >
                                        <div class="card">
                                            <div class="salonList-container">
                                                <img src="{{$shop->pic}}" class="card-img" alt="pic">
                                                <div class="salonList-item">
                                                    <h5 class="card-title">{{$shop->shop_name}}</h5>
                                                    <p class="card-text">Address : {{$shop->address}}</p>
                                                    <p class="card-text">Location : {{$shop->ratting}}  </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div> --}}

                            <div class="col-sm-6" style="margin-bottom: 15px">
                                <a href="{{url('/hire/shop/'.$shop->shop_id.'/')}}" style="color: black;    text-decoration: none;" >
                                    <div class="realShadow row no-gutters">
                                        <div class="col-md-4">
                                            <img 
                                                src="{{$shop->pic}}" 
                                                class="card-img round img-fluid"
                                                style=" width: 100%" 
                                                alt="{{$shop->shop_name}} ganga services"
                                                onerror="this.src = 'https://i.imgur.com/e2Ji5su.jpg';">
                                            
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$shop->shop_name}}</h5>
                                                <div class="card-text">{{$shop->address}}</div>
                                                    
                                                <span class="card-text" style="
                                                        background: #26a541; 
                                                        color: white;    
                                                        padding: 2px 7px;
                                                        border-radius: 14px;
                                                        font-size: 16px; ">
                                                    <span style="color: white">{{$shop->ratting}} </span><span class="fa fa-star" style="color:white"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                        @empty
                            
                                <div class="col-sm-12">
                                    <div style="text-align: center">We are sorry no shop found in this area!!</div>
                                </div>
                        @endforelse
                </div>
                
            </div>
        </div>
        <br>
    </div>
</section>


<script type="text/javascript">
    $(document).ready(function(){

        $("#searchForShop").click(function () { 
            // Checking for if area not selected
            if (!$("#cityListDropDownForSaloon").prop('selectedIndex')>0) {
                alert("Please Select a Area");
                return;
            }

            //Making empty the list
            $("#shopListArea").empty();

            //puting place holder in list 
            $("#shopListArea").append(''+
                '<div class="timeline-wrapper"  style="width: 100%">'+
                '    <div class="timeline-item">'+
                '        <div class="animated-background">'+
                '            <div class="background-masker header-top"></div>'+
                '            <div class="background-masker header-left"></div>'+
                '            <div class="background-masker header-right"></div>'+
                '            <div class="background-masker header-bottom"></div>'+
                '            <div class="background-masker subheader-left"></div>'+
                '            <div class="background-masker subheader-right"></div>'+
                '            <div class="background-masker subheader-bottom"></div>'+
                '            <div class="background-masker content-top"></div>'+
                '            <div class="background-masker content-first-end"></div>'+
                '            <div class="background-masker content-second-line"></div>'+
                '            <div class="background-masker content-second-end"></div>'+
                '            <div class="background-masker content-third-line"></div>'+
                '            <div class="background-masker content-third-end"></div>'+
                '    </div>'+
                '    </div>'+
                '</div>'+
            '');
            

            $areaID = $("#cityListDropDownForSaloon").children("option:selected").val();
            // Making ajax request to fetech list 
            
            $.ajax({
                    cache: false,
                    type: "POST",
                    data: {
       
                        _token:  "{{ csrf_token() }}",
                        areaID : $areaID,
                    },
                    url: "{{url('/')}}/findShopByArea", 
                    success: function(response){
                        console.log(response)
                        if (response.received) {
                            //Making empty the list
                            $("#shopListArea").empty();

                            if (response.saloonshoplist.length != 0 ) {
                                $shop = response.saloonshoplist;
                                //making list and appendng  in listbox 
                                for(var i = 0 ; i < $shop.length ; i ++){
                                    console.log('src="{{url('/')}}/'+$shop[i].pic+'"');
                                    $("#shopListArea").append(''+
                                


                                        '<div class="col-sm-6" style="margin-bottom: 15px">'+
                                        '    <a href="{{url('/')}}/shopdetails/'+$shop[i].shop_id+'" style="text-decoration: none;" >'+
                                        '        <div class="realShadow row no-gutters">'+
                                        '            <div class="col-md-4">'+
                                        '                <img '+
                                        '                    src="{{url('/')}}/'+$shop[i].pic+'"'+ 
                                        '                    class="card-img round img-fluid"'+
                                        '                    style="width: 100%"'+ 
                                        '                    alt="'+$shop[i].shop_name+'ganga services"'+
                                        '                    onerror="this.src = \'https://i.imgur.com/e2Ji5su.jpg\';">'+
                                                        
                                        '            </div>'+
                                        '            <div class="col-md-8">'+
                                        '                <div class="card-body">'+
                                        '                    <h5 class="card-title">'+$shop[i].shop_name+'</h5>'+
                                        '                    <div class="card-text">'+$shop[i].address+'</div>'+
                                        '                    <span class="card-text" style="'+
                                        '                            background: #26a541; '+
                                        '                            color: white;    '+
                                        '                            padding: 2px 7px;'+
                                        '                            border-radius: 14px;'+
                                        '                            font-size: 16px; ">'+
                                        '                        <span style="color: white">'+$shop[i].ratting+' </span><span class="fa fa-star" style="color:white"></span>'+
                                        '                    </span>'+
                                        '                </div>'+
                                        '            </div>'+
                                        '        </div>'+
                                        '    </a>'+
                                        '</div>'+
                                        

                                    '');
                                }
        
                            }else{
                                //making list as noe list found 
                                $("#shopListArea").append(''+
    
                                    '    <div class="col-sm-12">'+
                                    '        <div style="text-align: center">We are sorry no shop found in this area!! Please try other nearby area.</div>'+
                                    '    </div>'+

                                '');
    
                            }

                            

                            


                        }else{
                            alert("Oops!!! Somthing is not right");
                        }
                    },
                    error: function(xhr,status,error){
                        console.log(xhr.responseJSON);
                        console.log(status);
                        console.log(error);
                    }
            });
        })

    });
</script>
@endsection