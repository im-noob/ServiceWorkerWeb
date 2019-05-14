@extends('main')
@section('login')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Loign/Signup</div>

                <div class="card-body">
                                
                    @component('components.login')
                    @endcomponent

                                        
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
