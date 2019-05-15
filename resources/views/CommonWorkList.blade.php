@extends('main')
@section('hire')

@component('components.showallerror') 
@endcomponent

<form method="POST" action="{{url('/')}}/checkoutCartitem" id="checkoutForm">

    @csrf
    <section class="bodyView" id= "cartListItem">
            <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3>Order Summary</h3>
                </div>
                <div class="container" id="ItemListcontainer">
                    {{-- COde Goes here --}}
                </div>.
                <div class="card-footer feedback-container">
                    <span>Total : <i class="fas fa-rupee-sign" id="total"></i></span>
                    <div class="shop-cart-item">
                        <button type="button" class="btn btn-primary" id="SaveItemList">Continue</button> 
                    </div>  
                </div>
            </div>
        </div>
    </section>



    <!-- putting address part only when logined use -->
    @auth
        <section id="addressList" >
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3>Delivery Address</h3>
                    </div>
                    <div class="container" id="adresslistContainer">


                        <div class="row ">
                            <div class="col-sm-6 mb-3">
                                <label for="name">Name<span style="color:red"> *</span></label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" value="{{$userData->cname}} " required>
                                    
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="phonenoinbilliongaddres">10-digit mobile number<span style="color:red"> *</span></label>
                                <input type="text" name="phonefordel" inputmode="numeric" pattern="[0-9]{10}" class="form-control" value="{{$userData->phone}} " id="phonenoinbilliongaddres" placeholder="Your Mobile Number" required>
                            </div>
                        </div>
                    


                        <div class="row">
                            <div class="col-sm-5 mb-3">
                                <label for="State">State<span style="color:red"> *</span></label>
                                <select class="custom-select d-block w-100" id="State" name="state" required>
                                    {{-- <option value="">Choose...</option> --}}
                                    <option value="1">Bihar</option>
                                </select>
                                
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label for="city">City<span style="color:red"> *</span></label>
                                <select class="custom-select d-block w-100" id="city" name="city" required>
                                    <option value="" hidden>Choose City</option>
                                    @forelse ($cityList as $city)
                                        <option 
                                                value="{{$city->city_id}}" 
                                                @if ($city->city_id == $userData->city)
                                                    selected = "selected"                                        
                                                @endif
                                            >{{$city->city_name}} </option>
                                    @empty
                                        <option value="-1">Bhagalpur</option>
                                    @endforelse
                                </select>
                                
                            </div>
                            <div class="col-sm-3 mb-3">
                                <label for="zip">Pincode<span style="color:red"> *</span></label>
                                <input name="zip" type="text" value="{{$userData->cpin}}" inputmode="numeric" pattern="[0-9]{6}" class="form-control" id="Pincode" placeholder="PinCode" required>
                                
                            </div>
                        </div>


                        <div class="row ">
                            <div class="col-sm-6 mb-3">
                                <label for="address">Address<span style="color:red"> *</span></label>
                                <input name="address" type="text" value="{{$userData->address}}" class="form-control" id="address" placeholder="Address" required>
                                    
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="arealist">Select Area<span style="color:red"> *</span></label>
                                <select class="custom-select d-block w-100" id="arealist" name="arealist" required>
                                    <option value="" hidden>Choose Area</option>
                                    @forelse ($areaList as $area)


                                        @if($area->arealist_id == $userData->area_list_id)
                                            <option value="{{$area->arealist_id}}" selected='selected'>{{$area->area_city_name}}</option>
                                        @else
                                            <option value="{{$area->arealist_id}}">{{$area->area_city_name}}</option>
                                        @endif
                                    @empty
                                        <option value="-1">Other</option>
                                    @endforelse
                                </select>  
                            </div>

                        </div>

                        <hr class="mb-4">
                        
                        <div class="custom-control custom-checkbox">
                            <input name="updateadd" type="checkbox" class="custom-control-input" id="save-info" value="true" checked>
                            <label class="custom-control-label" for="save-info" >Update address for next time</label>
                        </div>
                        <hr class="mb-4">


                    </div>
                    <div class="card-footer feedback-container">
                        <div class="shop-cart-item" id="addressbuttonarea">
                            <button type="button" class="btn btn-primary" id="SaveAddress">
                                Save & Continue
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endauth
    <section id="paymentList" >
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Payment Options<span style="color:red"> *</span></h3>
            </div>
            <div class="container" id="paymentlistContainer">
                <div class="custom-control custom-radio mb-2 paymenttype1" style="padding-block: 10px; padding-inline-start: 40px">
                    <input class="custom-control-input " type="radio" name="paymenttype" id="paymenttype1" value="option1"/>
                    <label class="custom-control-label" for="paymenttype1" style="padding-inline-start: 5px;">
                        Cash on Delivery
                    </label>
                </div>
                <div class="custom-control custom-radio paymenttype1" style="padding-block: 10px; padding-inline-start: 40px">
                    <input class="custom-control-input" type="radio" name="paymenttype" id="paymenttype2" value="option2"/>
                    <label class="custom-control-label" for="paymenttype2" style="padding-inline-start: 5px;">
                        Credit / Debit / ATM Card
                    </label>
                </div>
            </div>

            
            <div class="card-footer feedback-container">
                <div class="shop-cart-item">
                    <button type="button" class="btn btn-primary" id="checkoutCart">
                        Checkout
                    </button>
                </div>
            </div>
        </div>
    </div>

    </section>

</form>


<script type="text/javascript">

    $(function(){
        $loginStatus = {{$Auth}} ;
        if ($loginStatus == 0 ) {
            $("#login1").click();
            $('#loginalert').alert();
            setTimeout(() => {
                $("#loginalert").hide();
            }, 5000);
        }
        //address list hide

        $("#addressList").hide();
        $("#paymentList").hide();




        $("#ItemListcontainer").text("");
        $totalPrice = 0;
        db.cartItems.each(function(cartItem){

            // show button when item
            $("#SaveItemList").show();

            $wor_list_id = cartItem.wor_list_id;
            $price = cartItem.price;
            $name = cartItem.name,
            $pic = cartItem.pic;
            $noofitem = cartItem.noofitem;

            $totalPrice += $price * $noofitem;
            $("#total").text($totalPrice);
            //'<input type="hidden" name="cartitem[1][]" value="'++'"/>',

            $("#ItemListcontainer").append(

                '<input type="hidden" name="cartitem[]" value="'+$wor_list_id+"-"+$noofitem+'"/>',

                '<div id="rowListCartValue'+$wor_list_id+'">'+
                    '<div class="row" >'+
                    '    <div class="col-3" style="align-self: center">'+
                    '        <img src="{{url('founder/')}}/public/'+$pic+'" onerror="this.src = \'https://i.imgur.com/e2Ji5su.jpg\';" class="card-img"  alt="'+$name+'  ganga services">'+
                    '    </div>'+
                    '    <div class="col-6">'+
                    '            <h5 class="card-title">'+$name+'</h5>'+
                    '            <button type="button" class="btn btn-primary" onclick="decreaseVal('+$wor_list_id+')" >-</button>'+
                    '            <span style="margin-inline: 10px;" class="bton-item" id="itemCount'+$wor_list_id+'">'+$noofitem+'</span>'+
                    '            <button type="button" class="btn btn-primary" onclick="increaseVal('+$wor_list_id+')" >+</button>'+
                                
                    '           <div class="col-4" style="margin-top: 10px; margin-left: -10px;">'+
                    '                <span><i class="fas fa-rupee-sign" >'+$price+'</i></span>'+
                    '           </div>'+
                    '    </div>'+
                    
                    '    <div class="col-3" style="align-self: center">'+
                    '       <button type="button" class="btn btn-danger btn-lg" onclick="deleteRowNow('+$wor_list_id+');" id= "deleteItem" ><i class="fas fa-times"></i></button>'+
                    '    </div>'+
                    
                    '</div>'+
                    '<hr>'+
                '</div>'


            );
        }).then(function(){
            noItemShow();
        });


        
        
        
        
        //delete item action to show no element 
        $("#deleteItem").click(function(){
            console.log("item deleted");
            noItemShow();
        })

        //When Clicked On SaveItemList
        $("#SaveItemList").click(function(){
            if ($loginStatus == 0 ) {
                $("#loginalert").show();
                $("#login1").click();
                $('#loginalert').alert();
                setTimeout(() => {
                    $("#loginalert").hide();
                }, 5000);
                return;
            }
            $("#addressList").show();
            if($("#SaveItemList").text().includes("Continue")){
                

                // hide addresslist
                $("#ItemListcontainer").hide();
                $("#SaveItemList").text("Change");

                
                //show address list
                $("#adresslistContainer").show();
                $("#SaveAddress").text("Save & Continue");
                
                // hide payment list
                $("#paymentlistContainer").hide();


            }else if($("#SaveItemList").text().includes("Change")){

                //itemlist show
                $("#ItemListcontainer").show();
                $("#SaveItemList").text("Continue");


                
                //address list hide
                $("#adresslistContainer").hide();
                $("#SaveAddress").text("Change");

                //payment list hide
                $("#paymentlistContainer").hide();


            }
            
        });


        //save address
        $("#SaveAddress").click(function(){

            //checking form validation for address   
            $name = $("#name");
            $phonenoinbilliongaddres  = $("#phonenoinbilliongaddres");
            $State = $("#State");
            $city = $("#city");
            $Pincode = $("#Pincode");
            $address = $("#address");
            $arealist  = $("#arealist");



            if ($name.val().trim().length == 0) {
                window.alert("Please enter your name.");
                $name.focus();
                return;
            }

            if($phonenoinbilliongaddres.val().trim().length == 0){
                alert("Please enter your phone no");
                $phonenoinbilliongaddres.focus();
                return;
            }else if ($phonenoinbilliongaddres.val().trim().length != 10) {
                alert("Please enter a valid phone no");
                $phonenoinbilliongaddres.focus();
                return;
            }

            if ($Pincode.val().trim().length == 0) {
                alert("Please enter your Pin Code");
                $Pincode.focus();
                return;
            }else if ($Pincode.val().trim().length != 6) {
                alert("Please enter valid pin code");
                $Pincode.focus();
                return;
            }

            if ($address.val().trim().length == 0 ) {
                alert("Please enter your address");
                $address.focus();
                return;
            }

            if (!$city.prop('selectedIndex')>0) {
                alert("Please select your city");
                $city.focus();
                return;
            }

            if (!$arealist.prop('selectedIndex')>0) {
                alert("Please select area list");
                $arealist.focus();
                return;
                
            }

            
            $("#paymentList").show();
            console.log("address button ")
            if ($("#SaveAddress").text().includes("Save & Continue") ) {
                
                // hide item lsit
                $("#ItemListcontainer").hide();
                $("#SaveItemList").text("Change");

                //address list hide
                $("#adresslistContainer").hide();
                $("#SaveAddress").text("Change");
                
                // hide payment list
                $("#paymentlistContainer").show();


            }else if($("#SaveAddress").text().includes("Change")) {

                // hide item list
                $("#ItemListcontainer").hide();
                $("#SaveItemList").text("Change");

                
                //show address list
                $("#adresslistContainer").show();
                $("#SaveAddress").text("Save & Continue");

                
                // hide payment list
                $("#paymentlistContainer").hide();
            }
        })


        $("#checkoutCart").click(function () {
            console.log("check out lcled    ",$("#checkoutCart").text())


            //Adding input in in form div with hidden input









                if (    
                        $("#paymenttype1").prop("checked") == true || 
                        $("#paymenttype2").prop("checked") == true
                    ){ 
                    
                    // checking for online payment
                    
                    
                    $("#checkoutForm").submit();
                }else{
                    alert("Select Payment Option");
                    console.log("lciking on the save addres");
                    // $("#SaveAddress").click();
                    return;
                }
        });
    });





    
    
    


    
</script>
<script>

    // function getLocation() {
    //     if (navigator.geolocation) {
    //     navigator.geolocation.getCurrentPosition(showPosition);
    //     } else {
    //     x.innerHTML = "Geolocation is not supported by this browser.";
    //     }
    // }

    // function showPosition(position) {
    //     console.log("Latitude: " + position.coords.latitude +
    //     " Longitude: " + position.coords.longitude);
    // }
    // getLocation();
</script> 
@endsection