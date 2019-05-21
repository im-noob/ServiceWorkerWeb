{{-- Nav Bar:START --}}
<nav id ="navBar" class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary" style="background-color: #007bff3b!important;">
        
    <a class="navbar-brand" href="{{url('/')}}" style="font-size: 28px;font-weight: 900;">
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


{{-- SCRIPTS --}}
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
                if($scrollHight>    {{$heightOfTransparency}} ){
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
    })
</script>