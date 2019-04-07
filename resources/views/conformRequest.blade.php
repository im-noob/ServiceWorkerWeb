@extends('main')
@section('conformRequest')
<section class="bodyView" >
    <div class="card">
        <div class="container">
        <h3 style="text-align:center;">OTP is successfully Send on given mobile no.</h3>
        <h3 style="text-align:center;">Enter your otp to conform your request</h3>
        <br>
            <form method="post" action="{{url('/')}}{{$url1}}" >
                <div class="row">
                    <div class = "col-md-3">
                        <input type="hidden" name="_token" value = "{{csrf_token()}}" >
                    </div>
                    <div class = "col-md-6">
                        @if (session('alert'))
                            <div class="alert alert-success">
                                {{ session('alert') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <input type="text" name="otp" placeholder="Enter OTP"  class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary" >Signup</button>
                        </div>
                        <p>Enter otp within 10 minutes.</p>
                    </div>
                    <div class = "col-md-3">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<script type="text/javascript">

    public function conformOTP()
    {
        console.log('Clicked');
        alert('Submited Conform.');
        return true;
    } 

    $(document).ready(function(){
        $('#login1').text("");
        $('#logout').text("");       
    });
</script>
@endsection