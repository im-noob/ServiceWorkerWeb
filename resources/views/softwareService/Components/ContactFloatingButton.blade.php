{{-- Float button :call:START --}}
<div class="mobile-cta">
    <a href="mailto:{{$emailID}}?subject=Call me&body=I'm Intrested" class="phone-flot-button" style="    background-color: red;">
        <i class="fas fa-envelope" style="color:white"></i>
    </a>
    <a href="tel:{{$phoneForTEL}}" class="phone-flot-button">
        <i class="fas fa-phone"></i>
    </a>
    <a href="sms:{{$phoneForSMS}}" class="phone-flot-button" style="background-color: #222425">
        <i class="far fa-comment-alt"></i>
    </a>
    <a href="https://wa.me/{{$phoneForWhatsapp}}/?text=I%27m%20Intrested.%20Please%20call%20me%20back." class="phone-flot-button">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>
{{-- Float button :call:STOP --}}

<style>

    /* Only Phoen CSS */

    /* PC VIEW active */
    @media all and (min-width:992px) and (max-width: 2000px) {
        .mobile-cta {
            display: none;
        } 
    }

    /* Phone button floating  */
    .mobile-cta {
        position: fixed;
        bottom: 64px;
        width: 42px;
        z-index: 999;
        /* display: none; */
        right: 10px;
        -webkit-transition: 0.6s;
        -moz-transition: 0.6s;
        -o-transition: 0.6s;
        transition: 0.6s;
    }

    /* Phone button floating  */
    .phone-flot-button{
        text-decoration: none;
        cursor: pointer;
        background: #1dbc55;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        display: block;
        overflow: hidden;
        text-align: center;
        box-sizing: border-box;
        box-shadow: 0 20px 30px rgba(0, 0, 0, 0.46);
        color: #fff;
        font-size: 22px;
        padding-top: 4px;
        margin-bottom: 10px;
    }

</style>