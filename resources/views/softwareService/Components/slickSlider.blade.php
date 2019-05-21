{{-- Happy Customer:START --}}
<section class="mt-4 mb-4 ">
    <div class="container" style="padding: 0;">
        <Div class="autoplay">
            {{$innerData}}
        </Div>
    </div>
</section>
{{-- Happy Customer:END --}}

{{-- Javascript:START --}}
<script>
    $(function(){
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

    })
</script>
{{-- Javascript:END --}}


{{-- CSS:START --}}
<style>

    /* Happy customer shadow */
    .happy-brand :hover{
        box-shadow: 0 15px 15px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.30);
    }

    /* slick button parent  */
    .buttonSilckParent{
        display: flex;
        align-items: center;
        height: 100%;
        background-color: #0c00020a;;
    }
    .buttonSilckParent:hover{
        background-color: #0c000233;
    }
    /* Button in slick */
    .nextArrowBtn{
        position: absolute;
        z-index: 1000;
        top: 0%;
        right: 0;
        color: #BFAFB2;
        cursor: pointer;
    }
    .prevArrowBtn{
        position: absolute;
        z-index: 1000;
        top: 0%;
        left: 0;
        color: #BFAFB2;
        cursor: pointer;
    }

</style>
{{-- CSS:END --}}






























{{-- Inner DATA EXample:START --}}
{{-- <div class="col-sm-3 card happy-brand" style="background-color: white" >
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
    
</div> --}}
{{-- InnerDAta Example:END --}}