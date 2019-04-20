@extends('main')
@section('hire')
<section class="bodyView">
        <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>card Item List</h3>
            </div>
            @php
                $size = sizeof($data);
                $total = 0;
            @endphp
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">S/L No.</th>
                        <th scope="col">Pic</th>
                        <th scope="col">Work Name</th>
                        <th scope="col">No. Of Item</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 0 ; $i < $size ; $i++)
                    <tr>
                        <td scope="row"> {{$i+1}} </td>
                        <td> <img src="{{url('/')}}{{$data[$i]->pic}}" class="card-img" alt="logo"></td>
                        <td>{{$data[$i]->work_name}}</td>
                        <td>
                            <form>
                                <input type="hidden" id="wor_id"  value="{{$data[$i]->wor_list_id}}"/>
                                <input type="number" id="noi" value="1" />
                            </form>
                        </td>
                        <td><i class="fas fa-rupee-sign" >{{$data[$i]->price}}</i></td>
                        @php
                            $total = $total + $data[$i]->price;
                        @endphp
                        <td><button class="btn btn-denger"><i class="fas fa-times"></i></button></td>
                    </tr>
                    @endfor
                    @if($size <= 0)
                        <p>No List is avaliable.</p>
                    @endif
                </tbody>
            </table>
            <div class="card-footer feedback-container">
                <span>Total : <i class="fas fa-rupee-sign" id="total">{{$total}}</i></span>
                <div class="shop-cart-item">
                    <button  class="btn btn-primary">ChackOut</button> 
                </div>  
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