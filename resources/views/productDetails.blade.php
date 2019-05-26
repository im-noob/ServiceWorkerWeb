@extends('main')
@section('productDetails')

    {{-- Conver Image:START --}}
    <section>
        <div class="container-fluid">
                <div class="card bg-dark text-white">
                    <img src=" {{url('/')}}/founder/public/{{$DetailsList->pic}}"" onerror = "this.src = 'https://i.imgur.com/e2Ji5su.jpg';" style="height: 220px;filter: brightness(60%);" class="card-img img-fluid" alt="...">
                    <div class="card-img-overlay">
                        <h1 class="card-title" style="font-size: 50px;text-align: center;">{{$DetailsList->work_name}}</h1>
                    </div>
                </div>
        </div>
    </section>
    {{-- Conver Image:END --}}

    {{-- Info:START --}}
    <section>
        <div class="container card" style="padding: 0;border-top-left-radius: 10px;border-top-right-radius: 10px">
            <div class="card-body">
                <h2 class="card-title" style="font-weight: 600;font-family: Axiforma-Regular,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif;">About The Product</h5>
                <p class="card-text" ">{{$DetailsList->info}}</p>
            </div>
        </div>    
    </section>
    {{-- Info:END --}}

    {{-- ADD To CArt and Continus Cart BUTTON:START --}}
    <section>
        <div class="container" style="padding: 0px">
            <div class="card" style="align-items: center;">
                <div class="row" style="width: 100%;">
                    <div class="col-6" style="align-self: center;">
                        <span><i class="fas fa-rupee-sign" id="price{{$DetailsList->wor_list_id}}">{{$DetailsList->price}}</i> /- </span>
                            
                    </div>
                    <div class="col-6">
                        {{-- Importing Add to Cart Button:START --}}
                        @component('components.AddToCartButton')
                            @slot('uniqueIDForButtonID')
                                {{$DetailsList->wor_list_id}}
                            @endslot
                            
                            @slot('extrabuttonclass')
                                mb-2 mt-2 btn-lg 
                            @endslot

                        
                        @endcomponent
                        {{-- Importing Add to Cart Button:END --}}
                    </div>
                </div>
                <div class="card-footer" style="width: 100%;">
                    <div class="row">
                        <div class="col-sm-6 "  style="align-self:center">
                                <span style="font-size: x-large;"> Total : <i class="fas fa-rupee-sign" id="total">00</i></span>
                        </div>

                        <a class="col-sm-6" href="{{url('/')}}/CartItem">
                            <button class="btn btn-primary btn-lg">Continue To Cart  <i style="font-size:large" class="fas fa-long-arrow-alt-right"></i></button>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    {{-- ADD To CArt and Continus Cart BUTTON:END --}}
    
    {{-- Latet Customer Review:START --}}
    <section>
        <div class="container card">
            <h3 style="font-weight: 700">Latest Customer Review</h3>
            <span class="text-muted">For {{$DetailsList->work_name}}   </span>
            <section style="background-color: #f5f5f5;border-radius: 4px">
                <div class="row">
                    <div class="col-sm-2">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="col-sm-10">
                        <div class="row">
                            <span style="font-weight: 700;">4.7 out of 5 start</span>
                            <span class="text-muted">average rating </span>
                        </div>
                        <div class="row">
                            <span style="font-weight: 700;">17,765 review</span>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </section>
    {{-- Latet Customer Review:END --}}
    <script>
        var AllCartItemWorkListID = [];
        AllCartItemWorkListID.push({{$DetailsList->wor_list_id}});
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