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
                        <form method="get" action="{{url('/')}}/signupForm">
                            <div class="form-group">
                                <label for="category">Example select</label>
                                <select class="form-control" id="category">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="mobileNo" placeholder="Enter Mobile No" class="form-control" id="mobileNo">
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
@endsection