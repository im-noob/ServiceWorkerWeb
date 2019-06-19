@extends('main')
@section('Institution')
<section class="bodyView">
    <div class="card">

        {{-- <div class="container ">


                <h3>Search Institution near you.</h3>
                <div class="row">
                    
                    <div class = "col-md-6 col-sm-6 form-group">
                        <select id="cityListDropDownForInstitution" style="height: 100%;"  class="custom-select custom-select-sm">
                            <option value="-1" hidden>Choose Area</option>
                            @forelse($cityName as $city)
                                <option value="{{$city->arealist_id}}" class="dropdown-item" href="#">{{$city->area_city_name}}</option>
                            @empty
                                <option  value="0">Bhagalpur</option>
                            @endforelse
                        </select>   
                    </div>
                    <div class="col-sm-6">
                            <div class="form-group">
                                <button id="searchForInstitution"  class="form-control btn btn-primary  btn-block" ><i class="fas fa-search"> Search</i></button>
                            </div>
                    </div>
                    
                </div>
        </div> --}}

        <div class="card">
            <div class="container" >
                <div class="card-hrader">
                    <h4>Local Institution List</h4>
                </div>
                <div id="InstitutionListArea" class="row">


                   {{-- Place Holder:START --}}
                    <div class="timeline-wrapper" style="width: 100%">
                        <div class="timeline-item">
                        <div class="animated-background">
                            <div class="background-masker header-top"></div>
                            <div class="background-masker header-left"></div>
                            <div class="background-masker header-right"></div>
                            <div class="background-masker header-bottom"></div>
                            <div class="background-masker subheader-left"></div>
                            <div class="background-masker subheader-right"></div>
                            <div class="background-masker subheader-bottom"></div>
                            <div class="background-masker content-top"></div>
                            <div class="background-masker content-first-end"></div>
                            <div class="background-masker content-second-line"></div>
                            <div class="background-masker content-second-end"></div>
                            <div class="background-masker content-third-line"></div>
                            <div class="background-masker content-third-end"></div>
                        </div>
                        </div>
                    </div>
                    {{-- Place Holder:END --}}
                        {{-- @forelse ($InstitutionInstitutionlist as $Institution)
                            

                                

                            <div class="col-sm-6" style="margin-bottom: 15px">
                                <a href="{{url('/hire/Institution/'.$Institution->Institution_id.'/')}}" style="color: black;    text-decoration: none;" >
                                    <div class="realShadow row no-gutters">
                                        <div class="col-md-4">
                                            <img 
                                                src="{{$Institution->pic}}" 
                                                class="card-img round img-fluid"
                                                style="height: 100%; width: 100%" 
                                                alt="{{$Institution->Institution_name}} ganga services"
                                                onerror="this.src = 'https://i.imgur.com/e2Ji5su.jpg';">
                                            
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$Institution->Institution_name}}</h5>
                                                <div class="card-text">{{$Institution->address}}</div>
                                                    
                                                <span class="card-text" style="
                                                        background: #26a541; 
                                                        color: white;    
                                                        padding: 2px 7px;
                                                        border-radius: 14px;
                                                        font-size: 16px; ">
                                                    <span style="color: white">{{$Institution->ratting}} </span><span class="fa fa-star" style="color:white"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                        @empty
                            
                                <div class="col-sm-12">
                                    <div style="text-align: center">We are sorry no Institution found in this area!!</div>
                                </div>
                        @endforelse --}}
                </div>
                
            </div>
        </div>
        <br>
    </div>
</section>


<script type="text/javascript">
    $(document).ready(function(){

        // Get all data
        getData("all");
        $("#searchForInstitution").click(function () { 
            // Checking for if area not selected
            // if (!$("#cityListDropDownForInstitution").prop('selectedIndex')>0) {
            //     alert("Please Select a Area");
            //     return;
            // }

            $filter = $("#cityListDropDownForInstitution").children("option:selected").val();
            // Making ajax request to fetech list 
            getData($filter);
            
        })
        function getData(filter){

            //Making empty the list
            $("#InstitutionListArea").empty();

            //puting place holder in list 
            $("#InstitutionListArea").append(''+
                '<div class="timeline-wrapper"  style="width: 100%">'+
                '    <div class="timeline-item">'+
                '        <div class="animated-background">'+
                '            <div class="background-masker header-top"></div>'+
                '            <div class="background-masker header-left"></div>'+
                '            <div class="background-masker header-right"></div>'+
                '            <div class="background-masker header-bottom"></div>'+
                '            <div class="background-masker subheader-left"></div>'+
                '            <div class="background-masker subheader-right"></div>'+
                '            <div class="background-masker subheader-bottom"></div>'+
                '            <div class="background-masker content-top"></div>'+
                '            <div class="background-masker content-first-end"></div>'+
                '            <div class="background-masker content-second-line"></div>'+
                '            <div class="background-masker content-second-end"></div>'+
                '            <div class="background-masker content-third-line"></div>'+
                '            <div class="background-masker content-third-end"></div>'+
                '    </div>'+
                '    </div>'+
                '</div>'+
            '');
            

            
            $.ajax({
                    cache: false,
                    type: "POST",
                    data: {
       
                        _token:  "{{ csrf_token() }}",
                        filter : filter,
                    },
                    url: "{{url('/')}}/getInstitution", 
                    success: function(response){
                        console.log(response)
                        if (response.received) {
                            //Making empty the list
                            $("#InstitutionListArea").empty();

                            if (response.data.length != 0 ) {
                                $data = response.data;
                                //making list and appendng  in listbox 
                                for(var i = 0 ; i < $data.length ; i ++){
                                    console.log('src="{{url('/')}}/'+$data[i].pic+'"');
                                    $("#InstitutionListArea").append(''+
                                


                                        '<div class="col-sm-6" style="margin-bottom: 15px">'+
                                        '    <a href="{{url('/')}}/InstitutionDetails/'+$data[i].shop_id+'" style="text-decoration: none;" >'+
                                        '        <div class="realShadow row no-gutters">'+
                                        '            <div class="col-md-4">'+
                                        '                <img '+
                                        '                    src="{{url('/')}}/'+$data[i].pic+'"'+ 
                                        '                    class="card-img round img-fluid"'+
                                        '                    style="height: 100%; width: 100%"'+ 
                                        '                    alt="'+$data[i].Institution_name+'ganga services"'+
                                        '                    onerror="this.src = \'https://i.imgur.com/e2Ji5su.jpg\';">'+
                                                        
                                        '            </div>'+
                                        '            <div class="col-md-8">'+
                                        '                <div class="card-body">'+
                                        '                    <h5 class="card-title">'+$data[i].shop_name+'</h5>'+
                                        '                    <div class="card-text">'+$data[i].address+'</div>'+
                                        '                    <span class="card-text" style="'+
                                        '                            background: #26a541; '+
                                        '                            color: white;    '+
                                        '                            padding: 2px 7px;'+
                                        '                            border-radius: 14px;'+
                                        '                            font-size: 16px; ">'+
                                        '                        <span style="color: white">'+$data[i].ratting+' </span><span class="fa fa-star" style="color:white"></span>'+
                                        '                    </span>'+
                                        '                </div>'+
                                        '            </div>'+
                                        '        </div>'+
                                        '    </a>'+
                                        '</div>'+
                                        

                                    '');
                                }
        
                            }else{
                                //making list as noe list found 
                                $("#InstitutionListArea").append(''+
    
                                    '    <div class="col-sm-12">'+
                                    '        <div style="text-align: center">We are sorry no Institution found in this area!! Please try other nearby area.</div>'+
                                    '    </div>'+

                                '');
    
                            }

                            

                            


                        }else{
                            alert("Oops!!! Somthing is not right");
                        }
                    },
                    error: function(xhr,status,error){
                        console.log(xhr.responseJSON);
                        console.log(status);
                        console.log(error);
                    }
            });

        }

    });
</script>
@endsection