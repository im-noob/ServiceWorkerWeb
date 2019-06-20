@component('components.beforeloadingAnimation')
@endcomponent

@extends('main')
@section('MyOrder')
    <input type="hidden" id="userID" value="{{$userID}}">
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12">


                    <!-- alert:START -->
                    <div class="alert alert-success" role="alert" id="SendAlertReview">
                        Thank you For sending Review
                    </div>
                    <!-- alert:END-->
                    <!-- alert:START -->
                    <div class="alert alert-success" role="alert" id="SendAlertReport">
                            Thank you For sending Report
                    </div>
                    <!-- alert:END-->

                    @forelse ($lotList as $Lotitem)
                        <div class="accordion mb-4" id="accordionForLot_{{$Lotitem->lot_id}}" lotid = "{{$Lotitem->lot_id}}">
                            <div class="card">
    
    
                                <div class="card-header" id="headingOne" lotid = "{{$Lotitem->lot_id}}" data-toggle="collapse" data-target="#collapseOne_{{$Lotitem->lot_id}}" aria-expanded="true" aria-controls="collapseOne_{{$Lotitem->lot_id}}">
                                    <h2 class="mb-0">
                                        <div class="row">
                                            <div class="col-10">
                                                Order Number: # {{$Lotitem->lot_id}}
                                            </div>
                                            <div class="col-2 justify-content-end">
                                                <i class="fas fa-chevron-up" id="arrow_{{$Lotitem->lot_id}}"></i>                                            
                                            </div>
                                        </div>
                                    </h2>
                                </div>
                            
                                <div id="collapseOne_{{$Lotitem->lot_id}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionForLot_{{$Lotitem->lot_id}}">
                                    <div class="card-body">
                                        <div class="list-group">
                                            
                                            
                                            @php $i = 1; @endphp
                                            @forelse ($Lotitem->cart_tab as $cartitem)
                                                <a href="#" class="list-group-item list-group-item-action ">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <span>{{$i++}}.</span><span id="workName_{{$cartitem->cart_id}}">{{$cartitem->work_name}}</span>
                                                        </div>
                                                        <input type="hidden" value="{{$cartitem->workerName}}" id="WorkerName_{{$cartitem->cart_id}}">
                                                        <div class="col-sm-6" id="workStatus_{{$cartitem->cart_id}}">
                                                            {{$statusArrList[$cartitem->status]}}                                                
                                                        </div>
                                                        <hr>
                                                        <div class="btn-group col-sm-3" role="group" aria-label="Basic example">
                                                            <button type="button" class="btn btn-success ripple" id="reviewbutton" cartID="{{$cartitem->cart_id}}" lotid = "{{$Lotitem->lot_id}}" workerID = "{{$cartitem->workerID}}" data-toggle="modal" data-target="#modelReview">Review</button>
                                                            <button type="button" class="btn btn-info ripple" id="Viewbutton" cartID="{{$cartitem->cart_id}}" lotid = "{{$Lotitem->lot_id}}"  workerID = "{{$cartitem->workerID}}" data-toggle="modal" data-target="#modelView">View</button>
                                                            <button type="button" class="btn btn-danger ripple" id="reportbutton" cartID="{{$cartitem->cart_id}}" lotid = "{{$Lotitem->lot_id}}"  workerID = "{{$cartitem->workerID}}" data-toggle="modal" data-target="#modelReport">Report</button>
                                                        </div>
                                                    </div>
                                                </a>                                                
                                            @empty
                                                <a href="#" class="list-group-item list-group-item-action ">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            No Item Found
                                                        </div>
                                                    </div>
                                                </a> 
                                            @endforelse


                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card-footer text-muted ">
                                    <div class="row">
                                        <div class="col-6">
                                            Total: {{$Lotitem->total_price}}
                                        </div>
                                        <div class="col-6" style="text-align: center;">
                                            @if ($Lotitem->paid_amt == $Lotitem->total_price)
                                                Payment: <i class="far fa-check-circle" style="color: #35b729"></i>
                                            @else
                                                Payment: <i class="far fa-clock" style="color: #e92829"></i>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12"">Order Date: {{$Lotitem->created_at}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">Address: {{$Lotitem->address}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div style="text-align: center;">Oops No Item Found</div>
                    @endforelse
                    
















                </div>
            </div>

            <!-- Review Model:START -->
            <div class="modal fade" tabindex="-1" role="dialog" id="modelReview">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Send Review</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                    <span class="fa fa-star col-2 fa-2x rateStar" ratebox = "1" id="rating1"></span>
                                    <span class="fa fa-star col-2 fa-2x rateStar" ratebox = "2" id="rating2"></span>
                                    <span class="fa fa-star col-2 fa-2x rateStar" ratebox = "3" id="rating3"></span>
                                    <span class="fa fa-star col-2 fa-2x rateStar" ratebox = "4" id="rating4"></span>
                                    <span class="fa fa-star col-2 fa-2x rateStar" ratebox = "5" id="rating5"></span>
                                    <span style="align-self: center;"><span id="overallratingForReview" >0</span> <span>Star</span></span> 
                                            
                            </div>
                            <div class="form-group mt-4">
                                    
                                    <label for="reviewTextArea">Write about your experience</label>
                                    <textarea class="form-control" id="reviewTextArea" rows="3"></textarea>
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeReviewModal">Close</button>
                            <button type="button" class="btn btn-primary" id="sendreview">Send Review</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Review Model:STOP -->

            <!-- Review Report:START -->
            <div class="modal fade" tabindex="-1" role="dialog" id="modelReport">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Send Request for any problem</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="reporttextarea">Tell us What Went Wrong?</label>
                                <textarea class="form-control" id="reporttextarea" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closereportModal">Close</button>
                            <button type="button" class="btn btn-primary" id="sendReport">Send Report</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Review Report:STOP -->




            <!-- Review View:START -->
            <div class="modal fade" tabindex="-1" role="dialog" id="modelView">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Deatils</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-6">
                                        Work Name:
                                    </div>
                                    <div class="col-6" id="viewModalWorkName">
                                        Fan Reparing
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-6">
                                        Work Status:
                                    </div>
                                    <div class="col-6" id="viewModalWorkStatus">
                                        Wating For confirm
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        Service Man:
                                    </div>
                                    <div class="col-6" id="viewModalServiceMannam">
                                        Rahul Kumar singh
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Review View:STOP -->
            
        </div>
    </section>
    <script>
        $(function(){
            // $("#reviewbutton").click(function(){
            //     $('#myModal').on('shown.bs.modal', function () {
            //         $('#myInput').trigger('focus')
            //     })
            // });

            $("#SendAlertReport").hide();
            $("#SendAlertReview").hide();
            //clicked now
            $cartID  = 0;
            $lotId = 0;
            $userID = $("#userID").val();
            $workerID = 0;
            /* Start rating maker:START */
            $clickedStar = 0 ;


            //collpese button chagne
            $(".card-header").click(function(){
                console.log("card heaeder clicke");
                $lotID = $(this).attr('lotid');
                $('#arrow_'+$lotID).toggleClass("fa-chevron-down fa-chevron-up");
            })


            //view model data change
            $("#Viewbutton").click(function(){
                $cartID = $(this).attr('cartID');
                $("#viewModalWorkName").text($("#workName_"+$cartID).text());
                $("#viewModalServiceMannam").text($("#WorkerName_"+$cartID).val());
                $("#viewModalWorkStatus").text($("#workStatus_"+$cartID).text());
            });




            

            //hover over rating 
            $('.rateStar').hover(function(){
                $rateboxID = $(this).attr('ratebox');
                for (let index = 1; index <= $rateboxID; index++) {
                    $("#rating"+index).addClass('checkedStar');
                }
            },function(){
                //removing start highlighted
                for (let index = 1; index <= $rateboxID; index++) {
                    if($clickedStar<index){
                        $("#rating"+index).removeClass('checkedStar');
                    }
                }
            })


            //click on ratting 
            $('.rateStar').click(function(){

                //remving start form all
                for (let index = 1; index <= 5; index++) {
                    $("#rating"+index).removeClass('checkedStar');
                }

                $rateboxID = $(this).attr('ratebox');
                $clickedStar = $rateboxID;
                console.log("#rating"+$rateboxID)
                for (let index = 1; index <= $rateboxID; index++) {
                    $("#rating"+index).addClass('checkedStar');
                }
                $("#overallratingForReview").text($rateboxID);
            })
            /* Start rating maker:STOP */
            


            /* reviewbutton click section:START */
            $("#reviewbutton").click(function(){
                console.log("revi buton");
                $cartID = $(this).attr('cartID');
                $lotId = $(this).attr('lotid');
                $workerID = $(this).attr('workerID');
                console.log($workerID);
            })
            $("#sendreview").click(function(){
                if ($clickedStar == 0) {
                    alert("Touch Star To give ratting");
                    return;
                }
                $ratting = $('#overallratingForReview').text();
                $reviewTextArea = $("#reviewTextArea").val();

                //clearing text
                $("#reviewTextArea").val('');
                //remving start form all
                for (let index = 1; index <= 5; index++) {
                    $("#rating"+index).removeClass('checkedStar');
                }
                $clickedStar = 0;

                
                //closing review model
                $("#closeReviewModal").click();
                console.log($lotId,$cartID,$reviewTextArea,$userID,"workID:",$workerID,$ratting);
                $.ajax({
                    cache: false,
                    type: "POST",
                    data: {
                        _token:  "{{ csrf_token() }}",
                        lotId : $lotId,
                        cartID : $cartID,
                        reviewTextArea : $reviewTextArea,
                        userID : $userID,
                        workerID : $workerID,
                        ratting : $ratting,
                    },
                    url: "{{url('/')}}/sendReviewByUser", 
                    success: function(response){
                        console.log(response)
                        if (response.received) {
                            $("#SendAlertReview").show();
                            $("html, body").animate({ scrollTop: 0 },{duration: 1000,});
                            setTimeout(() => {
                                $("#SendAlertReview").hide();
                            }, 5000);
                        }else{
                            alert("Oops!!! Somthing is not right");
                        }
                    },
                    error: function(xhr,status,error){
                        console.log(xhr.responseJSON);
                        console.log(status);
                        console.log(error);
                        alert("Opps!!! Somthing Went Wrong Try Again.");
                    }
                });
            })
            /* reviewbutton click section:END */


            /* Reportbutton click section:START */
            $("#reportbutton").click(function(){
                console.log("revi buton");
                $cartID = $(this).attr('cartID');
                $lotId = $(this).attr('lotid');
                $workerID = $(this).attr('workerID');
            })
            $("#sendReport").click(function(){
                $reporttextarea = $("#reporttextarea").val();
                if(!$reporttextarea.trim().length > 0){
                    alert("Please Describe your problem");
                    return;
                }
                $("#closereportModal").click();
                $("#reporttextarea").val('');
                console.log($lotId,$cartID,$reporttextarea,$userID,$workerID);
                
                $.ajax({
                    cache: false,
                    type: "POST",
                    data: {
                        _token:  "{{ csrf_token() }}",
                        lotId : $lotId,
                        cartID : $cartID,
                        reporttextarea : $reporttextarea,
                        userID : $userID,
                        workerID : $workerID,
                    },
                    url: "{{url('/')}}/sendReportByUser", 
                    success: function(response){
                        console.log(response)
                        if (response.received) {
                            $("#SendAlertReport").show();
                            $("html, body").animate({ scrollTop: 0 },{duration: 1000,});
                            setTimeout(() => {
                                $("#SendAlertReport").hide();
                            }, 5000);
                        }else{
                            alert("Oops!!! Somthing is not right");
                        }
                    },
                    error: function(xhr,status,error){
                        console.log(xhr.responseJSON);
                        console.log(status);
                        console.log(error);
                        alert("Opps!!! Somthing Went Wrong Try Again.");

                    }
                });
            })

            /* Reportbutton click section:END */



        })
    </script>
@endsection
