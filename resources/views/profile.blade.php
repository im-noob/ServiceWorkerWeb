@extends('main')
@section('profile')
<section>
    <div class="profileview">
        <div class="cart">
            <div class = "container">
                <br>
                <h2>My Profile</h2>
                <br>
                <form method="POST" action = "">
                    <input type="hidden" >
                    <div class= "form-group">
                        <span>Name</span>
                        <input class="form-control" type="text" name="name" placeholder = "Enter your name">
                        <br>
                        <span>Email</span>
                        <input class="form-control" type="email" name="name" placeholder = "Enter email">
                        <br>

                        <span>Mobile No.</span>
                        <input class="form-control" type="text" name="name" placeholder = "Enter mobile No.">

                        <br>
                        <button type="submit" class = "form-control" name="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
        $(document).ready(function(){
                console.log("Profile Open : ",$('#login1').text());
                $('#login1').text("Logout");
            
        });
    </script>

@endsection