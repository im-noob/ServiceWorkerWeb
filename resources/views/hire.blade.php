@extends('main')
@section('hire')
<section class="grid-container">
    <div >
        <h4>Service Provider</h4>
        <div class="list-group content-view" id="list-tab" role="tablist">
            @php
                $i = 0;
            @endphp
            @foreach($data as $msg)
                @if($i++ == 0)
                <a class="list-group-item list-group-item-action active cat" id="{{$msg->wor_info_id}}" data-toggle="list" href="#subcat" role="tab" aria-controls="prince">
                    <div class="card">
                        <div class="container">
                            <div class = "row">
                                <div class="col-sm-4">
                                    <img src="{{url('/')}}/images/company/gallery-1.jpg" class="rounded povView">
                                </div>
                                <div class="col-sm-8">
                                    <span style="color:black;">{{$msg->name}}</span><br>
                                    <span style="background-color:green;color:black;font-size:15px;">{{$msg->rating}}</span>
                                    <span style="color:black;font-size:15px;">{{$msg->no_of_work}}<i class="far fa-eye"></i> </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <span style="color:black;font-size:15px;">Work Time :{{$msg->work_hour}}</span>
                                </div>
                                <div class="col-sm-6">
                                    <span style="color:black;font-size:15px;">Experiance :{{$msg->work_exp}} year(s)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @else
                <a class="list-group-item list-group-item-action" id="{{$msg->wor_info_id}}" data-toggle="list" href="#subcat" role="tab" aria-controls="prince">
                    <div class="card">
                        <div class="container">
                            <div class = "row">
                                <div class="col-sm-4">
                                    <img src="{{url('/')}}/images/company/gallery-1.jpg" class="rounded povView">
                                </div>
                                <div class="col-sm-8">
                                    <span style="color:black;">{{$msg->name}}</span><br>
                                    <span style="background-color:green;color:black;font-size:15px;">{{$msg->rating}}</span>
                                    <span style="color:black;font-size:15px;">{{$msg->no_of_work}}<i class="far fa-eye"></i> </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <span style="color:black;font-size:15px;">Work Time:{{$msg->work_hour}}</span>
                                </div>
                                <div class="col-sm-6">
                                    <span style="color:black;font-size:15px;">Experiance:{{$msg->work_exp}} year(s)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endif
            @endforeach
        </div>
    </div>
    <div >
        <h4>Discription</h4>
        <div class="card">
            <div class="container">
                <h4 style="text-align:center;">Name Of Banda</h4>
                <span style="color:black;font-size:15px;">No of profile view :100 <i class="far fa-eye"></i> </span>
                <div class="row">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection