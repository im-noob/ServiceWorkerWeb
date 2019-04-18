@extends('main')
@section('SalonSelect')
<section class="bodyView">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Salon work Details</h3>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <h6 class="card-title">Hair cutting</h6>
                        <span>Price : <i class="fas fa-rupee-sign"></i> 400 </span>
                        <div class="bton" id="cbtonview1">
                            <button class="btn btn-primary" onclick="changeView(1)" >Add to Cart</button>                                    
                        </div> 
                    </div>
                    <br>
                    <div class="card">
                        <h6 class="card-title">Hair cutting</h6>
                        <span>Price : <i class="fas fa-rupee-sign"></i> 400 </span>
                        <div class="bton" id="cbtonview1">
                            <button class="btn btn-primary" onclick="changeView(1)" >Add to Cart</button>                                    
                        </div> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6 class="card-title">Hair cutting</h6>
                            </div>
                            <div class="col-sm-6">
                                <span>Price : <i class="fas fa-rupee-sign"></i> 400 </span>
                            </div>
                        </div>
                        <div class="bton" id="cbtonview1">
                            <button class="btn btn-primary" onclick="changeView(1)" >Add to Cart</button>                                    
                        </div> 
                    </div>
                    <br>
                    <div class="card">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6 class="card-title">Hair cutting</h6>
                            </div>
                            <div class="col-sm-6">
                                <span>Price : <i class="fas fa-rupee-sign"></i> 400 </span>
                            </div>
                        </div>
                        <div class="bton" id="cbtonview1">
                            <button class="btn btn-primary" onclick="changeView(1)" >Add to Cart</button>                                    
                        </div> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="salonList-container">
                                <h6 class="card-title">Hair cutting</h6>
                            <div class="workList-item">
                                <span> <i class="fas fa-rupee-sign">400 </i> /- </span>
                            </div>
                        </div>
                        <div class="bton" id="cbtonview1">
                            <button class="btn btn-primary" onclick="changeView(1)" >Add to Cart</button>                                    
                        </div> 
                    </div>
                    <br>
                    <div class="card">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6 class="card-title">Hair cutting</h6>
                            </div>
                            <div class="col-sm-6">
                                <span>Price : <i class="fas fa-rupee-sign"></i> 400 </span>
                            </div>
                        </div>
                        <div class="bton" id="cbtonview1">
                            <button class="btn btn-primary" onclick="changeView(1)" >Add to Cart</button>                                    
                        </div> 
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <span> Total : <i class="fas fa-rupee-sign"> 400 </i></span>
            </div>
        </div>
        <br>
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