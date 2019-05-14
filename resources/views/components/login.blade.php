
                    <!-- model for login:start -->
                    <div class="modal fade" id="loginSignupModal">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">SingIn / SignUp</h4>
                                        <button id="closeButton" type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                    
                                    <!-- alert:START -->
                                    <div class="alert alert-danger" role="alert" id="loginalert">
                                        Please Login/Singup Before Proceding...
                                    </div>
                                    <!-- alert:END-->
                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class = "authHeading" >
                                            @if (session('alert'))
                                                <div class="alert alert-success">
                                                    {{ session('alert') }}
                                                </div>
                                            @endif
                                            <div id="authId">
                    
                    
                                                <form method="POST" action="{{url('/')}}/login">
                                                    @csrf
                                                    
                                                    <div id="getPhonenoSignup">
                                                        <div class="form-group row">
                                                            <label for="phoneno" class="col-md-4 col-form-label">Phone</label>
                                                            <div class="col-md-8">
                                                                <input id="phoneno" type="text" class="form-control" name="phoneno" value="" inputmode="numeric" pattern="[0-9]{10}" id="phonenoBox" required autofocus>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-primary btn-lg btn-block" id="getOTP">
                                                            Get OTP
                                                        </button>            
                                                    </div>
                                                    
                    
                                                    <div id="verifyotpsignupDiv">
                                                        <div class="form-group row" style="margin-top: 15px;">
                                                            <label for="OTPBox" class="col-md-4 col-form-label" >OTP</label>
                                                            <div class="col-md-8">
                                                                <input id="OTPBox" type="password" class="form-control" name="otp" inputmode="numeric" pattern="[0-9]{6}"  required>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-primary btn-lg btn-block" id="verifyotpsignup">
                                                            Login/SignUP
                                                        </button>
                                                    </div>
                                                    
                                                </form>
                                                {{-- <form>
                                                    <div class="form-group">
                                                        <input type = "number" class="form-control" id="authPhoneNo"  placeholder="Enter Your Mobile No." required>
                                                    </div>
                                                </form>
                                                <button type="button" class="btn btn-primary" onclick= "changeData()" >Contineoue</button> --}}
                                            </div>
                                        </div>
                                        <br>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <!-- model for login:END -->

<script>
    $(function(){


            $pageURL = window.location.href;
            if ($pageURL.includes("login") || $pageURL.includes("register")) {
                $("#loginSignupModal").removeClass('modal fade');
                $("#closeButton").hide();
            }
            











            /* for model 1 Login signup */
            //login signup section
            $("#verifyotpsignupDiv").hide();
            $("#loginalert").hide();

            $("#getOTP").click(function(){
                phoneno = $("#phoneno").val();
                if(!phonenumberVerify(phoneno)){
                    alert("invalid Phone Number");
                    return;
                }
                console.log("sending otp to:",phoneno);
                $.ajax({
                    cache: false,
                    type: "POST",
                    data: {
                        _token:  "{{ csrf_token() }}",
                        phone : phoneno,
                    },
                    url: "{{url('/')}}/sendOTPtoPhone", 
                    success: function(response){
                        console.log(response)
                        if (response.received) {
                            if(response.OTPsent){
                                $("#verifyotpsignupDiv").show();
                                $("#OTPBox").focus();
                            }else{
                                alert("OTP not sent");
                            }
                        }else{
                            alert("Oops!!! Somthing is not right");
                        }
                    },
                    error: function(xhr,status,error){
                        console.log(xhr.responseJSON);
                        console.log(status);
                        console.log(error);
                        alert("Opps!!! Somthing Went Wrong Try Again.");

                    }
                });
                
            });

            //verifyOTP
            $("#verifyotpsignup").click(function(){
                $phoneno = $("#phoneno").val();
                if(!phonenumberVerify(phoneno)){
                    alert("invalid Phone Number");
                    return;
                }
                $otp = $("#OTPBox").val();
                $.ajax({
                    cache: false,
                    type: "POST",
                    data: {
                        _token:  "{{ csrf_token() }}",
                        phone : phoneno,
                        OTP : $otp,
                    },
                    url: "{{url('/')}}/loginviaOTP", 
                    success: function(response){
                        console.log(response)
                        if (response.received) {
                            if(response.loginsuccess == true){
                                
                                if ($pageURL.includes("login") ||  $pageURL.includes("register")) {
                                    window.location.href = "{{url('/')}}";    
                                }else{
                                    document.location.reload();
                                }
                                // alert("login success");
                            }else if(response.loginsuccess == "blocked"){
                                alert("You are Blocked for some reason..")
                                
                            }else if(response.loginsuccess == "expire"){
                                alert("OTP Expire try again !!");
                                
                            }else{
                                alert("Invalid OTP");
                            }
                        }else{
                            alert("Oops!!! Somthing is not right");
                        }
                    },
                    error: function(xhr,status,error){
                        console.log(xhr.responseJSON);
                        console.log(status);
                        console.log(error);
                        alert("Opps!!! Somthing Went Wrong Try Again.");

                    }
                });
            });

            function phonenumberVerify(inputtxt)
            {
                var phoneno = /^\d{10}$/;
                if(inputtxt.match(phoneno))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }


    })
</script>