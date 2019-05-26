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
        <div class="container card roundTop" style="padding: 0;">
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
    <section class="mt-4">
        <div class="container card roundTop">
            <h3 style="font-weight: 700" class="mt-2">Latest Customer Review</h3>
            <span class="text-muted">For {{$DetailsList->work_name}}   </span>
            
            {{-- Average and total Review:START --}}
            <section style="background-color: #f5f5f5;border-radius: 4px; padding: 25px" class="mt-3">
                <div class="row">
                    <div class="col-2" style="text-align: center;align-self: center;">
                        <i class="fas fa-star fa-2x" style="color:#4179ea"></i>
                    </div>
                    <div class="col-9 ml-2">
                        <div class="row">
                            <span style="font-weight: 700;">{{$avgRatting}} out of 5 star</span>
                            
                        </div>
                        <div class="row">
                            <span class="text-muted">average rating of our service</span>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                        <div class="col-2" style="text-align: center;align-self: center;">
                            <i class="fas fa-grin-alt fa-2x" style="color:#4179ea"></i>
                        </div>
                        <div class="col-9 ml-2">
                            <div class="row">
                                <span style="font-weight: 700;">{{$countRatting}} review/rating</span>
                            </div>
                            <div class="row">
                                <span class="text-muted">of our service by user </span>
                                
                            </div>
                        </div>
                    </div>

            </section>
            {{-- Average and total Review:END --}}

            <section class="mb-4 mt-4">
                <div class="container">

                    @forelse ($rattingList as $rating)
                        <div>
                            {{-- Showing message only when there is not any empty feedback --}}
                            @if (strlen($rating->feedback))
                                <div class="row mb-2 ml-1">
                                        <i class="fas fa-quote-left class="col-2"" style="color: #ddd"></i>
                                        <span class="col-10">  {{$rating->feedback}}</span>
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-3">
                                    <img src="{{$rating->pic}}" onerror = "this.src = 'https://i.imgur.com/CWMqgHO.png';" alt="..." class="img-thumbnail">
                                </div>
                                <div class="col-7">
                                    <div class="row">
                                        <div>
                                            {{-- Showing name anonymous if no name --}}
                                            @if (strlen($rating->cname))
                                                {{$rating->cname}}
                                            @else
                                                Anonymous
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="text-muted">{{$rating->feedback_date}}</div>
                                    </div>
                                </div>
                                <div class="col-2" style="align-self: center;">
                                    <i class="fas fa-star" style="color:#228d27">{{$rating->ratting}}</i>
                                </div>
                            </div>
                            <hr>
                        </div>
                    @empty
                        <div style="text-align: center;">No Review Found on this Service</div>
                    @endforelse
                    
                    


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