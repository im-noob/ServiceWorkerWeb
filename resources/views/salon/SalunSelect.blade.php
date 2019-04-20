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
                @php
                    $size = sizeof($data);
                @endphp
                @for($i = 0 ; $i < $size ; $i++)
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{url('/shop_details/'.$data[$i]->wor_info_id.'/')}}"  >
                        <div class="card">
                            <div class="salonList-container">
                                <img src="{{$data[$i]->pic}}" class="card-img" alt="pic">
                                <div class="salonList-item">
                                    <h5 class="card-title">{{$data[$i]->name}}</h5>
                                    <p class="card-text">Address : {{$data[$i]->address}}</p>
                                    <p class="card-text">Location : {{$data[$i]->location}}    {{$data[$i++]->pin_code}}</p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    @if($i < $size)
                    <div class="col-md-6">
                        <a href="{{url('/shop_details/'.$data[$i]->wor_info_id.'/')}}"  >
                            <div class="card">
                                <div class="salonList-container">
                                    <div class="salonList-item">
                                        <img src="{{$data[$i]->pic}}" class="card-img" alt="pic">
                                    </div>
                                    <div class="salonList-item">
                                        <h5 class="card-title">{{$data[$i]->name}}</h5>
                                        <p class="card-text">Address : {{$data[$i]->address}}</p>
                                        <p class="card-text">Location : {{$data[$i]->location}}    {{$data[$i]->pin_code}}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                </div>
                @endfor 
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