@component('components.beforeloadingAnimation')
@endcomponent

@extends('main')
@section('info')
<section class="bodyView" >
    <div class="card">
        <div class="container">
        <h3 style="text-align:center;">Your most welcome in GangaService</h3>
        <br>
            <form method="post" action="{{url('/')}}/hire/address" >
                <input type="hidden" name="_token" value = "{{csrf_token()}}" >
                <div class="row">
                    <div class = "col-md-6">
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" name="fullName" placeholder="Enter name"  class="form-control" id="fullName" required>
                        </div>
                    </div>
                    <div class = "col-md-6">
                        <div class="form-group">
                            <label for="mobileNo">Mobile Number</label>
                            <input type="text" name="mobileNo" placeholder="Enter Mobile No"  class="form-control" id="mobileNo" required>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" name="email" placeholder="Enter Your Email" class="form-control" id="email" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="YourCity">Your City</label>
                            <input type="text" name="YourCity" placeholder="Enter City" class="form-control" id="YourCity" required>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" name="state" placeholder="Enter State" class="form-control" id="state" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pincide">Pincode</label>
                            <input type="number" name="pincide" placeholder="Enter pincide No" class="form-control" id="pincide" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Address">Address</label>
                    <textarea name="Address" class="form-control" cols="40" rows="3" required></textarea>
                </div>
               
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary" >Signup</button>
                </div>
            </form>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function(){
       
    });
</script>
@endsection