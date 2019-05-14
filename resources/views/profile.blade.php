@extends('main')
@section('profile')
<section>
    <div class="bodyView">
        <div class="cart">
            <div class = "container">
                <br>
                <h2>My Profile</h2>
                <br>
                <div class="row">
                    <div class="col-sm-3">
                    </div>
                    <div  class="col-sm-6">
                        <form method="POST" action = "{{url('/')}}/profile/submit">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class= "form-group">
                                <span>Name</span>
                                <input class="form-control" type="text" name="name" placeholder = "Enter your name">
                            </div>
                            <div class="form-group">
                                <span>Email</span>
                                <input class="form-control" type="email" name="email" placeholder = "Enter email">
                            </div>
                            <div class="form-group">
                                <span>Mobile No.</span>
                                <input class="form-control" type="number" value="{{$mobile}}" name="mobile_no" placeholder = "Enter mobile No." readonly>
                            </div>
                            <div>
                                <button type="submit" class = "form-control" name="submit">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){
        
    });
</script>

@endsection