<!doctype html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#2874f0"/>
	<meta name="keywords" content="GangaService, GangaServices,Saloon, decoration, Service, Bahgalpur, Saloon, online,web Developer, beauty parlour, etc"/>
	<meta name="google-site-verification" content="GXUqCRblVI0vfyaIcsSyTu8VIF5_ak8O8i67KGg0cNA" />
    <meta name="Description" content="Best Service Provider of your city Bhagalpur for Saloon, mehndi, decoration, web Developer, beauty parlour, app developement,Local Servie, Best Service Provider">
    
    {{-- CSRF --}}
    @csrf
    
    <!-- PWA:START-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{url('/')}}/PWA/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{url('/')}}/PWA/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('/')}}/PWA/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('/')}}/PWA/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('/')}}/PWA/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{url('/')}}/PWA/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{url('/')}}/PWA/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{url('/')}}/PWA/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('/')}}/PWA/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{url('/')}}/PWA/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('/')}}/PWA/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{url('/')}}/PWA/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('/')}}/PWA/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{url('/')}}/ms-icon-144x144.png">

    <!-- PWA:END -->



    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    <title>GangaServices | Best Service Provider of your city Bhagalpur</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{url('/')}}/css/style.css"/>
    <link rel="stylesheet" href="{{url('/')}}/css/mainpage.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>

    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


   
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />

    <!-- dexie DB Loading  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dexie/2.0.4/dexie.min.js"></script>

    <!-- Cart System .js -->
    <script src="{{url('/')}}/js/CartSystem.js"></script>
    
  </head>
  <body>
    <section>
    
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
            
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="https://i.imgur.com/CWMqgHO.png"  width="30" height="30"  alt="GangaServices Logo" />
                Ganga Services
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto" style="align-items: center;">

                    <li class="nav-item active">
                        <a class="nav-link nav-text" href="{{url('/')}}/">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link nav-text" id="Myservice" data-toggle="modal" data-target="#service" >Services</a>
                    </li>
                    
                    <li class="nav-item active">
                        <a class="nav-link nav-text"  href="{{url('/')}}/regPartner" >Partners</a>
                    </li>


                    
                    
                    <li class="nav-item active">
                        <a class="nav-link nav-text" href="{{url('/')}}/about">About</a>
                    </li>
                    
                    <li class="nav-item active">
                        <a class="nav-link nav-text"  href="{{url('/')}}/contact" >Contact US</a>
                    </li>


                    
                    @auth
                        <li class="nav-item active">
                            <a class="nav-link nav-text" id="MyOrder" href="{{url('/')}}/MyOrder" >My Order</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link nav-text" id="logout" href="{{url('/')}}/logout" >Logout</a>
                        </li>
                    @else
                        <li class="nav-item active">
                            <a class="nav-link nav-text" id="login1" data-toggle="modal" data-target="#loginSignupModal" >Login/SignUp</a>
                        </li>
                    @endauth
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}/CartItem" id="cart-menu">
                            <i class="fab fa-opencart" style="font-size: x-large;color: white;">
                                <sup style="margin-left: -5px;">
                                    <sup class="badge badge-secondary" style="background-color: #dd0a0a; font-size: 15px" id="cartValue">
                                        0
                                    </sup>
                                </sup>
                            </i>  
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
        
    </section>        


    <div style="margin-top: 57.72px">
        <!-- Blade Part:START -->
        @yield('home')
        @yield('profile')
        @yield('signup')
        @yield('hire')
        @yield('signupForm')
        @yield('info')
        @yield('SalonSelect')
        @yield('conformRequest')
        @yield('contact')
        @yield('about')
        @yield('MyOrder')
        @yield('auth.login')
        @component('components.login')
        @endcomponent
        <!-- Blade Part:END -->

    </div>

    



    


    <!-- model for service list model:start -->

	<div class="modal fade" id="service" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Our Service</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">




                        <div class="col-md-6">
                            <h4>Category</h4>
                            <div class="list-group" id="list-tab" role="tablist">
                               <!-- new javascript code gies here -->
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div id="subcat">
                                <h4>Subcategory</h4>
                                <div class="list-group" id="list-cat" role="tablist">
                                   <!-- new javascript code gies here -->
                                   
                                </div>
                            </div>
                        </div>






                    </div>
                </div> 

            </div>
        </div>
    </div>
    <!-- model for service list model:end -->






<!-- script for 2 model:START -->
<script>

    $(function(){
            //calling function to load service 
            serviceModel();
            function serviceModel(){
                //geting all service list
                $.ajax({
                    cache: false,
                    type: "POST",
                    data: {
                        _token:  "{{ csrf_token() }}",
                    },
                    url: "{{url('/')}}/getServices", 
                    success: function(response){
                        // console.log(response)
                        if (response.received) {
                            //taking both variable inlocal variable 
                            $category = response.category;
                            $subcat = response.subcat;

                            // clearing all previous text
                            $("#list-tab").empty();

                            //appending category
                            for($i = 0 ; $i<$category.length; $i++){
                                if ($i == 0 ) {
                                    $("#list-tab").append('<a class="list-group-item list-group-item-action active cat" id="'+$category[$i].wor_cat_id+'" data-toggle="list" href="#subcat" role="tab" aria-controls="prince">'+$category[$i].wor_cat_name+'</a>');
                                }else{
                                    $("#list-tab").append('<a class="list-group-item list-group-item-action cat" id="'+$category[$i].wor_cat_id+'" data-toggle="list" href="#subcat" role="tab" aria-controls="prince">'+$category[$i].wor_cat_name+'</a>');
                                }
                                // console.log($category[$i]);
                            }

                            
                            // appening 
                            for($j = 0 ; $j<$subcat.length ; $j++){
                                $("#list-cat").append('<a class="list-group-item list-group-item-action" href="{{url('/hire/')}}/'+$subcat[$j].wor_subcat_id+'>'+$subcat[$j].subcat_name+'</a>');
                                // console.log($subcat[$j]);
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

            



            








            /* for model 2 service list model */

            $('body').on('click','.cat',function(){
                var id = $(this).attr('id');
                //console.log('Clicked On table',id);
                $.ajax({
                        url:'{{url('/')}}/selectSub',
                        data:{"form_id":id},
                        type:'GET'
                }).done(function(data){
                    //console.log(JSON.parse(data));
                    $('#list-cat').empty();
                    for (const msg of JSON.parse(data)) {
                       // console.log(msg.wor_subcat_id);
                        var template = '<a class="list-group-item list-group-item-action" href="'+'{{url("/hire/home")}}/'+msg.wor_subcat_id+'">'+msg.subcat_name+'</a>';
                        //console.log(template);
                        $('#list-cat').append(template);
                    }  

                    if(Object.keys(JSON.parse(data)).length == 0){
                        var template = '<a class="list-group-item list-group-item-action" href="#">No Record Found</a>';
                        //console.log(Object.keys(JSON.parse(data)).length);
                        $('#list-cat').append(template);
                    }
                });
            });

    })

</script>
<!-- script for 2 model:END -->

<!-- Google Translator -->
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- Google Translator -->
<script type="text/javascript">
function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'hi,en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
}
</script>






    <footer id="footer" class="bg-one">
        <div class="justify-content-center" style="background-color: #00a63f; padding: 10px;">
            <div class="col-sm-12  mb-3 mt-3" style="text-align: center;">
                <h3 style="color: #fff"><b><span>Need help? </span><span>Call our support team 24/7 at</span> <a href="tel:9608240612" style="color: #fff">9608240612</a></b></h3> 
            </div>
        </div>
        <div class="top-footer">
            <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4 mb-3">
                    <h3>About</h3>
                    <p>A Best service provide of your city.</p>
                    <div id="google_translate_element"></div>
                </div>

                <!--
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <ul>
                        <li><h3>Our Services</h3></li>
                        <li><a href="#">Ganga Services</a></li>
                        <li><a href="#">Ganga Cart</a></li>
                        <li><a href="#">SSGF</a></li>
                    </ul>
                </div>
                 End of .col-sm-4 -->

               
                <div class="col-sm-4 col-md-4 col-lg-4">
                <ul>
                    <li><h3>Quick Links</h3></li>
                    <li><a href="{{url('/')}}/regPartner">Partners</a></li>
                    <li><a href="{{url('/')}}/about">About</a></li>
                    <!-- XTTT 
                    <li><a href="{{url('/')}}/contact">Contact US</a></li>
                    -->
                </ul>
                </div>
                <!--  End of .col-sm-4 -->

                <div class="col-sm-4 col-md-4 col-lg-4">
                <ul>
                    <li><h3>Connect with us Socially</h3></li>
                    <li><a href="http://facebook.com/gangaservices">Facebook</a></li>
                    <li><a href="https://www.youtube.com/channel/UC612tWYpQW3OEKuYddfXoXQ">Youtube</a></li>

                    <!--
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Pinterest</a></li>
                    -->

                </ul>
                </div>
                <!-- End of .col-sm-4 -->
            </div>
            </div> <!-- end container -->
        </div>
        <div class="footer-bottom">
            <h5>Copyright 2019. All rights reserved.</h5>
            <h6>Design and Developed by <a>GangaServices.com Team</a></h6>
        </div>
    </footer>


    
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5cbdf5e7d6e05b735b43bb74/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Global site tag (gtag.js) - Google Analytics 
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138813418-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-138813418-1');
    </script>-->

  </body>
</html>