@extends('main')
@section('signup')
<section class="signup-view">
    <div class="container ">
        <div class="row ">
            <div class="col-md-6 ">
                <div class="block">
                    <h1 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" >Best Service Provider Of your City</h1>
                    <p class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" >Get Instant service provider in your affordable Price.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="container">
                        <form method="get" action="{{url('/')}}/sendOtp">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" /> 
                            <div class="form-group">
                                <label for="category">Select Occupation</label>
                                <select class="form-control" name="sub_id">
                                    @foreach($data as $msg)
                                        <option value="{{$msg->wor_subcat_id}}" >{{$msg->subcat_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="mobileNo" placeholder="Enter Mobile No" class="form-control" id="mobileNo" />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary" >Signup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function(){
        $('#login1').text("");
        $('#logout').text("");       
    });
</script
@endsection