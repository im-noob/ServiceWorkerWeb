<!-- PWA:START-->
@component('components.PWAComponent')
@endcomponent
<!-- PWA:STOP-->
<section id="tempbody" >
    
    <div style="text-align: center; padding-top: 50%;">
            <img src="{{url('/')}}/images/logodim.gif">
            {{-- <img src="{{url('/')}}/images/logofade.gif"> --}}
    </div>
</section> 
<script>
    window.onload = function(){
        document.getElementById("mainbody").removeAttribute('hidden');
        
        var elem = document.getElementById("tempbody");
        elem.parentElement.removeChild(elem);
        // var elem = document.getElementById("tempbody");
        // elem.parentElement.removeChild(elem);
        // scroll to top
        document.documentElement.scrollTop = 0;
    };
</script>