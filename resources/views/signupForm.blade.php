@extends('main')
@section('signupForm')
<section class="signupform" >
    <h3>Your most welcome in GangaService</h3>
    <br>
    <div class="card">
        <div class="container">
            <form >
                <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" name="mobileNo" placeholder="Enter Mobile No" class="form-control" id="fullName">
                </div>
                <div class="form-group">
                    <label for="Your City">Your City</label>
                    <input type="text" name="mobileNo" placeholder="Enter Mobile No" class="form-control" id="Your City">
                </div>
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
                    <label for="mobileNo">Mobile Number</label>
                    <input type="text" name="mobileNo" placeholder="Enter Mobile No" class="form-control" id="mobileNo">
                </div>
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" name="mobileNo" placeholder="Enter Your Email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="mobileNo"  class="form-control" id="password">
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary" >Signup</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection