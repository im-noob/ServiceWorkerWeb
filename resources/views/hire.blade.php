@extends('main')
@section('hire')
<section class="bodyView">
        <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Work List</h3>
            </div>
            @php
                $size = sizeof($data);
            @endphp

            @if($size <= 0)
                <p>No List is avaliable.</p>
            @endif
            @for($i =0 ; $i < $size; $i++)
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="salonList-container">
                            <img src="{{url('/')}}{{$data[$i]->pic}}" class="card-img" alt="logo">
                            <div class="left-item">
                                <h6 class="card-title">{{$data[$i]->work_name}}</h6>
                                <span><i class="fas fa-rupee-sign" id="price{{$data[$i]->wor_list_id}}">{{$data[$i]->price}}</i> /- </span>
                                <div class="bton" id="cbtonview{{$data[$i]->wor_list_id}}" >
                                    <button class="btn btn-primary" onclick="changeView({{$data[$i++]->wor_list_id}})" >Add to Cart</button>                                    
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                @if($i < $size)
                <div class="col-md-4">
                    <div class="card">
                        <div class="salonList-container">
                            <img src="{{url('/')}}{{$data[$i]->pic}}" class="card-img" alt="logo">
                            <div class="left-item">
                                <h6 class="card-title">{{$data[$i]->work_name}}</h6>
                                <span><i class="fas fa-rupee-sign" id="price{{$data[$i]->wor_list_id}}">{{$data[$i]->price}}</i> /- </span>
                                <div class="bton" id="cbtonview{{$data[$i]->wor_list_id}}" >
                                    <button class="btn btn-primary" onclick="changeView({{$data[$i++]->wor_list_id}})" >Add to Cart</button>                                    
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                @endif
                @if($i < $size)
                <div class="col-md-4">
                    <div class="card">
                        <div class="salonList-container">
                            <img src="{{url('/')}}{{$data[$i]->pic}}" class="card-img" alt="logo">
                            <div class="left-item">
                                <h6 class="card-title">{{$data[$i]->work_name}}</h6>
                                <span><i class="fas fa-rupee-sign" id="price{{$data[$i]->wor_list_id}}">{{$data[$i]->price}}</i> /- </span>
                                <div class="bton" id="cbtonview{{$data[$i]->wor_list_id}}" >
                                    <button class="btn btn-primary"  onclick="changeView({{$data[$i]->wor_list_id}})"  >Add to Cart</button>                                    
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <br>
            @endfor
            <div class="card-footer">
                <span> Total : <i class="fas fa-rupee-sign" id="total">00</i></span>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">

    function changeView(id){

        var val = $('#price'+id).text();
        var total = $('#total').text();
        total = parseInt(val) + parseInt(total);
        $('#total').text(total);

        $.ajax({
            url:'{{url('/')}}/addToCart',
            data:{"work_id":id,"count":1},
            type:'get'
        }).done(function(data){

            console.log("Data returened:"+data);
            $('#cbtonview'+id).empty();
            $('#cbtonview'+id).append(
                '<button class="btn btn-primary" onclick="increaseVal('+id+')" >+</button>'+
                '<span class="bton-item" id="'+id+'">1</span>'+
                '<button class="btn btn-primary" onclick="decreaseVal('+id+')" >-</button>'
            );
        });
        console.log('view Changed');
    }

    function decreaseVal(id){

        var val = $('#'+id).text();
        val = val-1;
        console.log(val);
        if(val > 0){
            $('#'+id).text(val);
            var val1 = $('#price'+id).text();
            var total = $('#total').text();
            total = parseInt(total) - parseInt(val1);
            $('#total').text(total);
        }
    }

    function increaseVal(id){
        var val = $('#'+id).text();
        val = parseInt(val)+1;

        var val1 = $('#price'+id).text();
        var total = $('#total').text();
        total = parseInt(val1) + parseInt(total);
        $('#total').text(total);

        // console.log(val);
        $('#'+id).text(val);
    }

    $(document).ready(function(){
        $('#login1').text("");
        $('#logout').text("");       
    });
</script
@endsection