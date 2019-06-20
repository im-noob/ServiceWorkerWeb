@component('components.beforeloadingAnimation')
@endcomponent

@extends('main')
@section('InstitutionPost')
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<style type="text/css">
    .rawHTML>img{
      width: 100%!important;
    }
</style>
    {{-- <section id="top-select">
        <div class="container mb-4">
            <select class="form-control" id="select-notice-type">
                <option value="all">All Post</option>
                <option value="1">News & Events</option>
                <option value="2">Appointments</option>
                <option value="3">Exam Update</option>
                <option value="4">Admission</option>
                <option value="5">Tender</option>
                <option value="6">Vacancies</option>
                <option value="7">Seminar</option>
            </select>
        </div>
    </section> --}}




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


    <section id="noticeSection">
        <div class="container" style="margin-bottom: 1em;" id="notice-container">

            <div class="list-group">
                <li class="list-group-item list-group-item-action active">
                    Download List
                </li>

                @forelse ($data as $item)
                    <a href="{{$item->download_link}}" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{$item->download_link_text}}</h5>
                            <big class="text-muted"> <span class="badge badge-primary badge-pill">{{$item->file_size}} <i class="fas fa-cloud-download-alt fa-lg"></i></span></big>
                        </div>
                        <p class="mb-1">{{$item->description}}</p>
                        <small class="text-muted">Published on : {{$item->post_date}}</small>
                    </a>
                @empty
                    <li class="list-group-item list-group-item-info">Nothing to download.</li>
                @endforelse
                


            </div>

        </div>
    </section>
    
    
    
    
    
    
    <script>
        
        $(function(){

            
        })
    </script>
@endsection






