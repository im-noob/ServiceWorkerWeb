@extends('main')
@section('signupForm')
<section class="bodyView" >
    
    <div class="card">
        <div class="container">
            <h3 style="text-align:center;">Your most welcome in GangaService</h3>
                <br>
            <form method="post" action="{{url('/')}}/SP/submitProfile">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class = "row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" name="name" placeholder="Enter your full name" class="form-control" id="fullName"/>
                        </div>
                        <div class="form-group">
                            <label for="Your_City">Your City</label>
                            <input type="text" name="city" placeholder="Enter city" class="form-control" id="Your_City"/>
                        </div>
                        <div class="form-group">
                            <label for="State">State</label>
                            <input type="text" name="State"  class="form-control" id="State"/>
                        </div>
                        <div class="form-group">
                            <label for="pin">Pincode : </label>
                            <input type="number" name="pin" class="form-control" id="pin"/>
                        </div>
                        <div class="form-group">
                            <label for="Address">Address</label>
                            <textarea name="Address" class="form-control" cols="40" rows="4" required></textarea>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category">Example select</label>
                            <select class="form-control" id="category">
                                <option selected >{{$subcat[0]->subcat_name}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mobileNo">Mobile Number</label>
                            <input type="text" name="mobileNo" value="{{$mobile}}" placeholder="Enter Mobile No" class="form-control" readonly />
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" name="email" placeholder="Enter Your Email" class="form-control" id="email"/>
                        </div>
                        <div class="form-group">
                            <label for="time">Work Hour</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    From :<input type="time" name="tFrom" class="form-control" placeholder = "From"/>
                                </div>
                                <div class="col-sm-6">
                                    To :<input type="time" name="tTO" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price">Service Charge :</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fas fa-rupee-sign"></i></span>
                                        <input type="number" name="pMin" placeholder="Min Price" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fas fa-rupee-sign"></i></span>
                                        <input id="number" type="text" class="form-control" name="pMax" placeholder="Max Price" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        Select Pic : <input type="file" name="pic" class="form-control" />
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary" >Submit</button>
                </div>
            </form> 
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){
        $('#login1').text("");
        $('#logout').text("Logout");       
    });
</script>
@endsection