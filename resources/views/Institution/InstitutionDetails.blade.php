@component('components.beforeloadingAnimation')
@endcomponent

@extends('main')
@section('InstitutionDetails')

    {{-- Conver Image:START --}}
    <section>
        <div class="container-fluid">
                <div class="card bg-dark text-white">
                    <img src=" {{url('/')}}/founder/public/{{$DetailsList->pic}}"" onerror = "this.src = 'https://i.imgur.com/e2Ji5su.jpg';" style="height: 220px;filter: brightness(60%);" class="card-img img-fluid" alt="...">
                    <div class="card-img-overlay">
                        <h1 class="card-title" style="font-size: 50px;text-align: center;">{{$DetailsList->shop_name}}</h1>
                    </div>
                </div>
        </div>
    </section>
    {{-- Conver Image:END --}}

    {{-- Info:START --}}
    <section>
        <div class="container card roundTop" style="padding: 0;">
            <div class="card-body">
                <h2 class="card-title" style="font-weight: 600;font-family: Axiforma-Regular,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif;">About The Institution</h5>
                <p class="card-text" ">{{$DetailsList->description}}</p>
            </div>
        </div>    
    </section>
    {{-- Info:END --}}

    {{-- Post/Download BUTTON:START --}}
    <section>
        <div class="container" style="padding: 0px">
            <div class="card" style="align-items: center;">
                <div class="row" style="width: 100%;">
                    <div class="col-6" style="    text-align: center; color: white">
                        <a href="{{url('/')}}/InstitutionPostpage/{{$DetailsList->shop_id}}" class="btn btn-primary">Post/Notice</a>
                    </div>
                    <div class="col-6" style="    text-align: center; color: white">
                        <a href="{{url('/')}}/InstitutionDownloadingPage/{{$DetailsList->shop_id}}" class="btn btn-primary">Download</a>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
    {{-- Post/Download BUTTON:END --}}
    


    <script>
       
        $(function(){
            
        })
    </script>
@endsection