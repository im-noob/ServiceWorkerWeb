<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Ganga Services | Mobile App Development | Website Development | Software Development | Digital Marketing </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Bootstrap:START -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap:END -->

    <!-- Jquery:START -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- JQuery:END -->

    <!-- Font Awesome:START -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Font Awesome:END -->

    <!-- Slik Sliderbar:START -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Slik Sliderbar:END -->

    <link rel='stylesheet' type='text/css' media='screen' href='{{url('/')}}/css/softwareService.css'>
    <script src='{{url('/')}}/js/softwareService.js'></script>
</head>
<body>

    {{-- NabBar:START --}}
    @component('softwareService.Components.transparentNav',['heightOfTransparency'=> 376])
    @endcomponent
    {{-- NAvbar:END --}}
    
    {{-- Section:START --}}
    @yield('main')
    {{-- Section:END --}}


    {{-- Fotter:START --}}
    <footer>
        <div class="container"  style="text-align: center;">


            {{-- Only for pc:START --}}
            <div class="row onlyonPC mb-4">
                {{-- Header --}}
                <div class="col-md-4 mt-4 " >
                    <h2 style="font-size: 40px;">Ganga Services</h2>
                    <div style="text-align: start;"><a class="nonDecoLinkFooter"><i class="fas fa-phone" ></i> Call Us 96082 40612 </a></div>
                </div>

                {{-- Service List --}}
                <div class="col-md-4 mt-4 ">
                    <div class="row">
                        <h4 class="offset-4">Services</h4>
                    </div>
                    <div class="row">
                        <a href="{{url('/')}}/"  class="nonDecoLinkFooter offset-4">Mobile Application</a>
                    </div>
                    <div class="row">
                        <a href="{{url('/')}}/"  class="nonDecoLinkFooter offset-4">Software Development</a>
                    </div>
                    <div class="row">
                        <a href="{{url('/')}}/"  class="nonDecoLinkFooter offset-4">CMS Development</a>
                    </div>
                    <div class="row">
                        <a href="{{url('/')}}/"  class="nonDecoLinkFooter offset-4">Corporate Branding</a>
                    </div>
                    <div class="row">
                        <a href="{{url('/')}}/"  class="nonDecoLinkFooter offset-4">Digital Marketing</a>
                    </div>
                </div>

                {{-- About Links --}}
                <div class="col-md-4 mt-4 ">
                    <div class="row">
                        <h4 class="offset-4">About</h4>
                    </div>
                    <div class="row">
                        <a href="{{url('/')}}/"  class="nonDecoLinkFooter offset-4">The Company</a>
                    </div>
                    <div class="row">
                        <a href="{{url('/')}}/"  class="nonDecoLinkFooter offset-4">Methodology</a>
                    </div>
                    <div class="row">
                        <a href="{{url('/')}}/"  class="nonDecoLinkFooter offset-4">Contact US</a>
                    </div>
                </div>
            </div>
            {{-- Only for pc:STOP --}}


            {{-- Only For Phone:START --}}
            <div class="row onlyonPhone">
                <div class="col-sm-12  mt-4">
                    <div>
                        <h2>Ganga Services</h2>
                    </div>
                </div>
            </div>
            {{-- Only For Phone:END --}}



            {{-- Universal Footer --}}
            <div class="row">

                {{-- Copyrights --}}
                <div class="col-sm-12 col-md-4 mb-2 ">
                    <div>Copyright 2019 © Ganga Services.</div><div> All Rights Reserved.</div>
                </div>

                {{-- Social Links --}}
                <div class="col-sm-12 col-md-4 mb-2 mx-auto" >
                    <div class="" style="text-align: center">
                        <a href="https://www.facebook.com/gangaservices/" target="_blank" style="padding: 10px"><i class="whitetext fab fa-facebook-f facebook-hover"></i></a>
                        <a href="https://www.twitter.com/gangaservices/" target="_blank"  style="padding: 10px"><i class="whitetext fab fa-twitter twitter-hover"></i></a>
                        <a href="https://www.instagram.com/ganga_services/" target="_blank"  style="padding: 10px"><i class="whitetext fab fa-instagram instagram-hover"></i></a>
                        <a href="https://www.linkedin.com/company/gangaservices/" target="_blank"  style="padding: 10px" ><i class="whitetext fab fa-linkedin-in linkedin-hover"></i></a>
                    </div>
                </div>

                {{-- Terms and policy --}}
                <div class="col-sm-12 col-md-4 mb-2 mx-auto" >
                    <div class="" style="text-align: center">
                        <a href="https://www.facebook.com/gangaservices/" class="nonDecoLinkFooter" target="_blank" style="padding: 10px; ">Privacy Policy</a>
                        |
                        <a href="https://www.linkedin.com/company/gangaservices/" class="nonDecoLinkFooter" target="_blank"  style="padding: 10px; " >Terms & Condition</a>
                    </div>
                </div>
            </div>
            
        </div>
    </footer>
    
    {{-- Fotter:END --}}

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5ce2db45d07d7e0c6394814a/default';
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