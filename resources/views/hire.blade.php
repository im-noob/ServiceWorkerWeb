@extends('main')
@section('hire')

<script>
    var AllCartItemWorkListID = [];
</script>
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
                <p style="text-align: center; font-size: x-large;">No List is avaliable.</p>
            @endif

            <div class="row card-body">
                @for($i =0 ; $i < $size; $i++)
                   
                    <DIV class="col-md-4 mb-4">
                        <div class="card">
                            <div>
                                <div class="card-body">
                                    <a href=" {{url('/')}}/Productdetails/{{$type}}/{{$data[$i]->wor_list_id}}"  style="text-decoration: none">
                                        <img id="ppic{{$data[$i]->wor_list_id}}" srcOrginal = "{{$data[$i]->pic}}" src="{{url('founder/')}}/public/{{$data[$i]->pic}}" class="card-img-top img-thumbnail rounded img-fluid" onerror="this.src = 'https://i.imgur.com/QtXcFQM.png';"  alt="{{$data[$i]->work_name}}  ganga services" style="    height: 200px;">
                                        
                                        <h4 class="card-title" style="margin-top: 10%;" id="pname{{$data[$i]->wor_list_id}}">{{$data[$i]->work_name}}</h4>
                                        <p class="card-text">
                                            {{substr($data[$i]->info,0,100)}}..
                                            <span style="color:blue;">more</span>
                                        </p>
                                        
                                        <span><i class="fas fa-rupee-sign" id="price{{$data[$i]->wor_list_id}}">{{$data[$i]->price}}</i> /- </span>
                                    
                                    </a>
                                    
                                    {{-- Importing Add to Cart Button:START --}}
                                    @component('components.AddToCartButton')
                                        @slot('uniqueIDForButtonID')
                                            {{$data[$i]->wor_list_id}}
                                        @endslot
                                         
                                        @slot('extrabuttonclass')
                                        @endslot
                                    @endcomponent
                                    {{-- Importing Add to Cart Button:END --}}

                                </div>
                            </div>
                        </div>
                       
                    </DIV>


                    <script>AllCartItemWorkListID.push({{$data[$i]->wor_list_id}})</script>
                @endfor
            </div>


            @if($size>0)
            
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-6 "  style="align-self:center">
                                <span style="font-size: x-large;"> Total : <i class="fas fa-rupee-sign" id="total">00</i></span>
                        </div>

                        <a class="col-sm-6" href="{{url('/')}}/CartItem">
                            <button class="btn btn-primary btn-lg">Continue To Cart  <i style="font-size:large" class="fas fa-long-arrow-alt-right"></i></button>
                        </a>
                    </div>
                </div>

            @endif


        </div>
    </div>
</section>


<script type="text/javascript">

    
    $(function(){
        //checking for already added cart
        var totalPriceOnLoad = 0 ;
        AllCartItemWorkListID.forEach(function(wor_list_id){
            db.cartItems.where("wor_list_id").anyOf(wor_list_id).each(function(cartItem){
                $('#cbtonview'+wor_list_id).empty();
                $('#cbtonview'+wor_list_id).append(
                    '<button class="btn btn-primary" onclick="decreaseVal('+wor_list_id+')" >-</button>'+
                    '<span class="bton-item" id="itemCount'+wor_list_id+'">'+cartItem.noofitem+'</span>'+
                    '<button class="btn btn-primary" onclick="increaseVal('+wor_list_id+')" >+</button>'
                );
                totalPriceOnLoad += cartItem.noofitem * cartItem.price;
                $('#total').text(totalPriceOnLoad);
                // console.log(cartItem.wor_list_id,)
            }); 

            
        })    
    })
    
    
   
</script>
@endsection