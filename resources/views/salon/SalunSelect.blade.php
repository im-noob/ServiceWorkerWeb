@extends('main')
@section('SalonSelect')
<section class="bodyView">
    <div class="card">
        <div class="container ">
            <form > 
                <h3>Search Salon near you.</h3>
                <div class="row">
                    <div class="col-sm-6">
                    <span for="pincode">Enter Pincode :</span>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    
                                    <input type="number" class="form-control"  placeholder="Eg:812007" id="pincode" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <button  class="form-control btn btn-primary" ><i class="fas fa-search"> Search</i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <span for="area">select Area:</span>
                        <select class="form-control" id="area">
                            <option>bhagalpur-budhanath</option>
                            <option>sarai</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <br>
        <div class="card">
            <div class="container" >
                <div class="card-hrader">
                    <h4>Local Salon List</h4>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{url('/')}}/shop_details"  >
                        <div class="card">
                            <div class="salonList-container">
                                <div class="salonList-item">
                                    <img src="{{url('/')}}/images/pricing-bg.jpg" class="card-img" alt="...">
                                </div>
                                <div class="salonList-item">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">As a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                        </a>
                        <br>
                        <a href="{{url('/')}}/shop_details"  >
                        <div class="card">
                            <div class="salonList-container">
                                <div class="salonList-item">
                                    <img src="{{url('/')}}/images/pricing-bg.jpg" class="card-img" alt="...">
                                </div>
                                <div class="salonList-item">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">As a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{url('/')}}/shop_details"  >
                        <div class="card">
                            <div class="salonList-container">
                                <div class="salonList-item">
                                    <img src="{{url('/')}}/images/pricing-bg.jpg" class="card-img" alt="...">
                                </div>
                                <div class="salonList-item">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                        </a>
                        <br>
                        <a href="{{url('/')}}/shop_details" >
                        <div class="card">
                            <div class="salonList-container">
                                <div class="salonList-item">
                                    <img src="{{url('/')}}/images/pricing-bg.jpg" class="card-img" alt="...">
                                </div>
                                <div class="salonList-item">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">As a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</section>


<script type="text/javascript">
    $(document).ready(function(){
        $('#login1').text("");
        $('#logout').text("");       
    });
</script
@endsection