@extends('softwareService.master')
@section('main')
    {{-- cursole:START --}}
    <div class="container-fluid" style="padding: 0">
        {{-- Nav Bar:START --}}
        <nav id ="navBar" class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary" style="background-color: #007bff3b!important;">
        
            <a class="navbar-brand" href="{{url('/')}}" style="font-size: 30px;font-weight: 900;">
                <img src="https://i.imgur.com/CWMqgHO.png"  width="30" height="30"  alt="GangaServices Logo" />
                Ganga Services
            </a>

            <button id="navBarToggerBtton" class="navbar-toggler realShadow" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto" style="align-items: center;">

                    <li class="nav-item active">
                        <a class="nav-link nav-text" href="{{url('/')}}/">Home</a>
                    </li>

                    <li class="nav-item active">
                            <a class="nav-link nav-text"  href="{{url('/')}}/regPartner" >Work</a>
                    </li>

                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Mobile Application</a>
                            <a class="dropdown-item" href="#">Software Development</a>
                            <a class="dropdown-item" href="#">Corporate Branding</a>
                            <a class="dropdown-item" href="#">Corporate Branding</a>
                            <a class="dropdown-item" href="#">Digital Marketing</a>
                            <a class="dropdown-item" href="#">Web & CMS Development</a>
                        </div>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link nav-text"  href="{{url('/')}}/regPartner" >About</a>
                    </li>
    
                    <li class="nav-item active">
                        <a class="nav-link nav-text"  href="{{url('/')}}/regPartner" >Contact Us</a>
                    </li>


                    <li class="nav-item active">
                        <a class="nav-link nav-text"  href="{{url('/')}}/regPartner" >Request Info</a>
                    </li>


                </ul>
            </div>
        </nav>
        {{-- Nav Bar:END --}}

        <div class="bd-example">
            <div id="carouselcontactus" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselcontactus" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselcontactus" data-slide-to="1" ></li>
                    <li data-target="#carouselcontactus" data-slide-to="2" ></li>
                    <li data-target="#carouselcontactus" data-slide-to="3" ></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{url('/')}}/images/Development/watertree.jpg" class="d-block w-100" alt="We love helping Customer Support Ganga Services">
                        <div class="carousel-caption  d-sm-block">
                            <h3>We Love Helping</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{url('/')}}/images/Development/city.jpg" class="d-block w-100" alt="24X7 Call support Ganga Services">
                        <div class="carousel-caption  d-sm-block">
                            <h3>We are always here to help you</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{url('/')}}/images/Development/iceberger.jpg" class="d-block w-100" alt="Send Feedback to improve us  ganga services">
                        <div class="carousel-caption  d-sm-block">
                            <h3>Just Leave Feedback for us</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{url('/')}}/images/Development/waterpull.jpg" class="d-block w-100" alt="Send Feedback to improve us  ganga services">
                        <div class="carousel-caption  d-sm-block">
                            <h3>Just Leave Feedback for us</h3>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselcontactus" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselcontactus" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    {{-- cursole:END --}}

    {{-- section:1:START --}}
    <section class="mt-5 mb-5">
        <div class="container">
            <h2 style="text-align: center;">Service <span style="color: #c7d0d8; font-family: "Libre Baskerville", serif;font-style: italic;font-weight: 400;">We Offer</span></h2>
            <div class="col-sm-12" style="text-align: center;">
                We are a service provider company, focusing on connecting customer with developer through ground-level marketing solution. To ensure you best service at least price rate.
            </div>
        </div>
    </section>
    {{-- section:1:END --}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 mt-2">
                    <div class="card bg-dark text-white">
                        <img src="{{url('/')}}/images/Development/watertree.jpg" class="card-img rounded mx-auto" alt="" height="390px">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-8">
                    <div class="row">

                        <div class="col-sm-6 mt-2">
                            <div class="card bg-dark text-white">
                                <img src="{{url('/')}}/images/Development/watertree.jpg" class="card-img rounded mx-auto" alt="" height="190px" >
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text">Last updated 3 mins ago</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="card bg-dark text-white">
                                <img src="{{url('/')}}/images/Development/watertree.jpg" class="card-img rounded mx-auto" alt="" height="190px" >
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text">Last updated 3 mins ago</p>
                                </div>
                            </div>
                        </div>
            
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mt-2">
                            <div class="card bg-dark text-white">
                                <img src="{{url('/')}}/images/Development/watertree.jpg" class="card-img rounded mx-auto" alt="" height="190px" >
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text">Last updated 3 mins ago</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="card bg-dark text-white">
                                <img src="{{url('/')}}/images/Development/watertree.jpg" class="card-img rounded mx-auto" alt="" height="190px" >
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text">Last updated 3 mins ago</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
    
                
            </div>
        </div>
    </section>

    {{-- Happy Customer:START --}}
    <section class="mt-4 mb-4 ">
        <div class="container" style="padding: 0;">
            <Div class="autoplay">
                <div class="col-sm-3 card happy-brand" style="background-color: white" >
                    <img class="img-fluid m-4  rounded mx-auto" src="http://jetprogramme.org/wp-content/uploads/2017/03/Square-Instagram-Logo.png"/>
                </div>
                <div class="col-sm-3 card happy-brand">
                    <img class="img-fluid m-4 rounded mx-auto" src="http://jetprogramme.org/wp-content/uploads/2017/03/Square-Instagram-Logo.png"/>
                </div>
                <div class="col-sm-3 card happy-brand">
                    <img class="img-fluid m-4 rounded mx-auto" src="http://jetprogramme.org/wp-content/uploads/2017/03/Square-Instagram-Logo.png"/>
                    
                </div>
                <div class="col-sm-3 card happy-brand">
                    <img class="img-fluid m-4 rounded mx-auto" src="http://jetprogramme.org/wp-content/uploads/2017/03/Square-Instagram-Logo.png"/>
                    
                </div>
            </Div>
        </div>
    </section>
    {{-- Happy Customer:END --}}

    {{-- Enquery:START --}}
    <section style="background-color: #fb2224">
        
        <div class="container p-5">
            
            <div class="row whitetext mb-3">
                <h3 class="mx-auto" style="font-weight: 900; text-align: center; " >Take the first step towards right direction</h3>
            </div>
            <div class="row">
                
                <div class="offset-md-2 col-md-3 d-flex justify-content-end mb-3" >
                    <div class="row">
                        <div class="col-8">
                            <div class="row whitetext" style="FONT-SIZE: 30PX;  ">
                                <a href="tel:+919608240612" style="text-decoration: none; color: white; cursor: pointer">8340669783</a>
                            </div>
                            <div class="row whitetext" style="font-size: 20px; direction: rtl;">
                                Call us anytime
                            </div>
                        </div>
                        <div class="col-4" style="align-self: center;">
                            <a href="tel:+919608240612" style="text-decoration: none; color: white; cursor: pointer"><i class="fas fa-phone fa-3x whitetext"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3  d-flex justify-content-center mb-3" style="text-align: center;" >
                        <button type="button" style="border-radius: 50px;padding: 10PX 40PX;" class="btn btn-dark btn-lg">Request info</button>

                </div>

                <div class="d-flex justify-content-start col-md-4  mb-3" >
                    <div class="row">
                        <div class="col-4" style="align-self: center;">
                            <a href="javascript:void(Tawk_API.toggle())" style="text-decoration: none; color: white; cursor: pointer">
                                <i class="fas fa-location-arrow fa-3x whitetext startChart"></i>
                            </a>
                        </div>
                        <div class="col-8">
                            <div class="row whitetext startChart" style="FONT-SIZE: 30PX;">
                                <a href="javascript:void(Tawk_API.toggle())" style="text-decoration: none; color: white; cursor: pointer">Live Chat </a>
                            </div>
                            <div class="row  whitetext" style="FONT-SIZE: 20PX;">
                                discuss your plan
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        {{-- Float button :call --}}
        <div class="mobile-cta">
            <a href="mailto:help.gangaservices@gmail.com?subject=Call me&body=I'm Intrested" class="phone-flot-button" style="    background-color: red;">
                <i class="fas fa-envelope" style="color:white"></i>
            </a>
            <a href="tel:+919608240612" class="phone-flot-button">
                <i class="fas fa-phone"></i>
            </a>
            <a href="sms:+919608240612" class="phone-flot-button" style="background-color: #222425">
                <i class="far fa-comment-alt"></i>
            </a>
            <a href="https://wa.me/918340669783/?text=I%27m%20Intrested.%20Please%20call%20me%20back." class="phone-flot-button">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
        
        

    </section>
    {{-- Enquery:END --}}


    <script>
        $(function(){

            /************* DONT REMOVE WORKING CODE :START ********************/
            // on scroll checking nav bar color if not on top
            $(window).on('scroll',function(){
                addRemoveBackground();
            })
            function addRemoveBackground(){
                // Geting scroll Height
                $scrollHight = $(window).scrollTop();

                // adding class when scroll hight is grater 
                if($scrollHight>376){
                    $("#navBar").removeAttr('style');
                }else{
                    $("#navBar").attr('style','background-color: #007bff3b!important;');
                }
            }
            /************* DONT REMOVE WORKING CODE :END ********************/


            // nav bar color on togger button for mobiel only
            $("#navBarToggerBtton").click(function(){
                $iscollapsed = $("#navbarNav").hasClass('show')
                console.log($iscollapsed);
                if($iscollapsed){
                    $("#navBar").attr('style','background-color: #007bff3b!important;');
                    addRemoveBackground();
                }else{
                    $("#navBar").removeAttr('style');
                    // addRemoveBackground();
                }
            });
            // Starting slide bear for happy clints
            $('.autoplay').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                focusOnSelect: true,
                // dots: true,
                prevArrow: '<div class="slick-prev buttonSilckParent prevArrowBtn"><i class="fa fa-angle-left fa-4x " aria-hidden="true"></i></div>',
                nextArrow: '<div class="slick-next buttonSilckParent nextArrowBtn"><i class="fa fa-angle-right fa-4x " aria-hidden="true"></i></div>'
            });

            // opening twak chat on request
            $(".startChart").click(function(){
                console.log("clicked startchat");

                //checking if mobile
                var isMobile = false; //initiate as false
                // device detection
                if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
                    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
                    isMobile = true;
                }

                // Selectin iframe body
                var tawkWindow = document.getElementsByTagName('iframe')[0].contentWindow.document;
                if(isMobile){
                    tawkWindow = document.getElementsByTagName('iframe')[1].contentWindow.document;
                }
                // writing message
                tawkWindow.getElementById("chatTextarea").value = 'Hello! I need some help.';
                // tawkWindow.getElementById("chatTextarea").focus();
                // $submitBtn = tawkWindow.getElementById("chatTextarea");
                // var e = $.Event( "keypress", { which: 13 } );
                // $('tawkWindow #chatTextarea').trigger(e);
            });
        })
    </script>
    
@endsection
