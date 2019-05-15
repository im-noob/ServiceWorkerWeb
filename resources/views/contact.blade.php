@extends('main')
@section('contact')
    <section>
        {{-- <div class="container" style="position: relative;
        text-align: center;
        color: white;">
            <div class="card bg-dark text-white">
                <img src="https://i.imgur.com/6uGo1uM.png" class="card-img round img-fluid" alt="Helping Customer Ganga Service" style="">
                <div class="card-img-overlay">
                    <h1 class="card-title ">We Love Helping</h1>
                </div>
            </div>
        </div> --}}

        <div class="container">
                <div class="bd-example">
                    <div id="carouselcontactus" class="carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselcontactus" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselcontactus" data-slide-to="1" ></li>
                            <li data-target="#carouselcontactus" data-slide-to="2" ></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://i.imgur.com/PD6wDBE.png" class="d-block w-100" alt="We love helping Customer Support Ganga Services">
                                <div class="carousel-caption  d-sm-block">
                                    <h3>We Love Helping</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://i.imgur.com/6uGo1uM.png" class="d-block w-100" alt="24X7 Call support Ganga Services">
                                <div class="carousel-caption  d-sm-block">
                                    <h3>We are always here to help you</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://i.imgur.com/JqPU6vL.png" class="d-block w-100" alt="Send Feedback to improve us  ganga services">
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
        
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    @if(Session::has('success'))
                        <div class="alert alert-success"> 
                            <strong>{{ Session::get('success') }}</strong>
                        </div>
                    @else
                        <h1 style="    text-align: center;">Contact Form</h1>
                        <form method="POST" action="{{url('/')}}/submitContactForm " id="contactUSForm">
                            
                        
                            @foreach ($errors->all() as $message) 
                                <div class="alert alert-danger"> 
                                    <strong>{{$message}}</strong>
                                </div>
                            @endforeach
                            @csrf
                            <div class="form-group mb-3">
                                <input name="nameCUS" type="text" class="form-control" id="nameContactUS" aria-describedby="emailHelp" placeholder="Name*" required>
                            </div>
                            <div class="form-group mb-3">
                                <input name="emailCUS" type="email" class="form-control" id="emailContactUS" aria-describedby="emailHelp" placeholder="Email*" required>
                            </div>
                            <div class="form-group mb-3">
                                <input name="mobileCUS" type="text" inputmode="numeric" pattern="[0-9]{10}" class="form-control" id="phoneContactUS" placeholder="Phone Number*" required>
                            </div>
                            <select name="OptionCUS" class="custom-select custom-select-sm" style="    height: 40px;"  required>
                                <option selected hidden value="">Select Option*</option>
                                <option value="Message For Us">Message For Us</option>
                                <option value="Report a problem">Report a problem</option>
                                <option value="Feedback">Feedback</option>
                                <option value="Other">Other</option>
                            </select>

                            <div class="form-group mb-3" style="    margin-top: 20px;">
                                <textarea name="messageCUS"  class="form-control" id="messageContactUS" rows="3" placeholder="Address*" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        
                        
                        </form>
                    @endif
                </div>
                <div class="col-sm-3 mb-4">
                    <div class="card" style="    margin-top: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">Report a problem</h5>
                        <p class="card-text">you can submit any problem and report in contact us section.</p>
                        <a href="#contactUSForm" class="btn btn-danger">Submit Report Now</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection