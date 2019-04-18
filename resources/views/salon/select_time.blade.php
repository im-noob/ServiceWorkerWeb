@extends('main')
@section('SalonSelect')
<section class="bodyView">
        <div class="container">
        <div class="card text-center">
            <div class="card-header">
                <h3>Salon work Details</h3>
            </div>
            <div class="card-body">
                <h5 class="card-title">Star Salon</h5>
                <h6 class="card-subtitle mb-2 text-muted">Rattting <span style="background-color:blue;color:white;"> 5.0 </span></h6>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="salonList-container">
                            <div class="workList-item">
                                <img src="{{url('/')}}/images/pricing-bg.jpg" class="card-img" alt="...">
                            </div>
                            <div class="workList-item">
                                <h6 class="card-title">Hair cutting</h6>
                                <span>Price : <i class="fas fa-rupee-sign"></i> 400 </span>
                                <p>Discription : this is workghfh gfhf </p>
                                <div class="bton" id="cbtonview1">
                                    <button class="btn btn-primary" onclick="changeView(1)" >Add to Cart</button>                                    
                                </div> 
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="salonList-container">
                            <div class="workList-item">
                                <img src="{{url('/')}}/images/pricing-bg.jpg" class="card-img" alt="...">
                            </div>
                            <div class="workList-item">
                                <h6 class="card-title">Hair cutting</h6>
                                <span>Price : <i class="fas fa-rupee-sign"></i> 400 </span>
                                <p>Discription : this is workghfh gfhf </p>
                                <div class="bton" id="cbtonview2">
                                    <button class="btn btn-primary" onclick="changeView(2)" >Add to Cart</button>                                    
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-6">
                    <div class="card">
                        <div class="salonList-container">
                            <div class="workList-item">
                                <img src="{{url('/')}}/images/pricing-bg.jpg" class="card-img" alt="...">
                            </div>
                            <div class="workList-item">
                                <h6 class="card-title">Hair cutting</h6>
                                <span>Price : <i class="fas fa-rupee-sign"></i> 400 </span>
                                <p>Discription : this is workghfh gfhf </p>
                                <div class="bton" id="cbtonview3">
                                    <button class="btn btn-primary" onclick="increaseVal(3)" >+</button>
                                    <span class="bton-item" id ="3">1</span>
                                    <button class="btn btn-primary" onclick="decreaseVal(3)" >-</button>                                    
                                </div> 
                            </div>
                        </div>
                    </div><br>
                    <div class="card">
                        <div class="salonList-container">
                            <div class="workList-item">
                                <img src="{{url('/')}}/images/pricing-bg.jpg" class="card-img" alt="...">
                            </div>
                            <div class="workList-item">
                                <h6 class="card-title">Hair cutting</h6>
                                <span>Price : <i class="fas fa-rupee-sign"></i> 400 </span>
                                <p>Discription : this is workghfh gfhf </p>
                                <div class="bton" id="cbtonview4">
                                    <button class="btn btn-primary" onclick="changeView(4)" >Add to Cart</button>                                    
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <span> Total : <i class="fas fa-rupee-sign">  400 </i></span>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="container">

                <p>Your request is queued. Your time is : <strong>5:50 PM</strong> . You have to reach on the salun before 10 min. </p>

                <button> Request </button>

            </div>
        </div>
    </div>
</section>


<script type="text/javascript">

    function changeView(id){
        $('#cbtonview'+id).empty();
        $('#cbtonview'+id).append(
            '<button class="btn btn-primary" onclick="increaseVal('+id+')" >+</button>'+
            '<span class="bton-item" id="'+id+'">1</span>'+
            '<button class="btn btn-primary" onclick="decreaseVal('+id+')" >-</button>'
        );

        console.log('view Changed');
    }

    function decreaseVal(id){

        var val = $('#'+id).text();
        val = val-1;
        console.log(val);
        if(val > 0){
         $('#'+id).text(val);
        }
    }

    function increaseVal(id){
        var val = $('#'+id).text();
        val = parseInt(val)+1;
        console.log(val);
        $('#'+id).text(val);
    }

    $(document).ready(function(){
        $('#login1').text("");
        $('#logout').text("");       
    });
</script
@endsection