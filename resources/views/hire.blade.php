@extends('main')
@section('hire')

<section class = "bodyView">
    <div class="card">
        <div class="container">
            <div class="d-flex justify-content-center mb-3">
                <div class="p-2 "><h3>Service Provider List</h3></div>
            </div>
            <div class="row"> 
                @foreach($data as $msg)
                    <div class = "col-md-4">
                        <div class="card">
                        <div class ="container">
                            <div class = "row">
                                <div class="col-md-6">
                                    <img src="{{$msg['pic']}}" class="rounded povView" alt="UserPic">
                                </div>
                                <div class="col-md-6">
                                    <span style="font-size:20px;color:black;">{{$msg['name']}}</span><br>
                                    <span style="font-size:16px;color:black;">No of Views: {{$msg['no_of_profile_view']}}</span><br>
                                    <span style="font-size:14px;color:black;background-color:green"> {{$msg['rating']}}* </span>
                                </div>
                            </div>
                            <hr>
                            <ul class="list-group" id="worklist1">
                                @foreach($msg['priceList'] as $msg1)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{$msg1->subcat_name}}
                                        <span ><i class="fas fa-rupee-sign"></i>{{$msg1->min_price}} - <i class="fas fa-rupee-sign"></i>{{$msg1->max_price}} </span>
                                    </li>
                                @endforeach
                            </ul>
                            <hr>
                            <form action="{{url('/')}}/hire/submit" method="get">
                                <input type="hidden" name="id" value="{{$msg['wor_info_id']}}" >
                                <input type="hidden" name="subcat_id" value = "{{$subcat}}" >
                                <input type="hidden" name="_token" value = "{{csrf_token()}}" >
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary form-control"> Hire me </button>
                                </div>    
                            </form>
                            </div>
                        </div>
                    </div> 
                @endforeach
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function(){
        $('#login1').text("");
        $('#logout').text("");       
    });
</script>
@endsection