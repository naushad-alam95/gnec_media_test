    @extends('layouts.app')

    @section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="topnav" id="myTopnav">
                          <a href="{{ url('/home')}}" class="active">Home</a>
                          <a href="{{ url('/about')}}">About Us</a>
                          <a href="{{ url('/contact')}}">Contact</a>
                        </div>
                    </div>


      
                  <!-- Full Page Image Background Carousel Header -->
                <header class="container">
                  <h1>GNEC Media Test</h1>
                </header>
                <section class="container">
                  <div class="slider">
                    <div class="slide">
                      <img src="http://placehold.it/1020x350/DD0048/fff?text=Slide1">
                    </div>

                    <div class="slide">
                      <img src="http://placehold.it/1020x350/05B8CC/fff?text=Slide2">
                    </div>

                    <div class="slide">
                      <img src="http://placehold.it/1020x350/9077f2/fff?text=Slide3">
                    </div>

                  </div>

                  <div class="slider-nav">
                    <span class="arrow-prev">
                      <i class="fa fa-chevron-left"></i></span>

                    <ul class="slider-dots"></ul>

                    <span class="arrow-next">
                      <i class="fa fa-chevron-right"></i></span>
                  </div>
                </section>





                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button> 
                                    <strong>{{ $message }}</strong>
                            </div>
                            @endif


                            @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button> 
                                    <strong>{{ $message }}</strong>
                            </div>
                        @endif
                                            
                    </div>

                    <div class="container">
                          <form action="/contact-us" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post">
                            @csrf
                            <label for="fname">Name</label>
                            <input type="text" id="name" name="name" placeholder="Your name..">

                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Your email..">

                            <label for="lname">Mobile No</label>
                            <input type="text" id="mobile" name="mobile" placeholder="Your Mobile Number..">

                            <label for="subject">Message</label>
                            <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>

                            <input type="submit" value="Submit">

                          </form>
                        </div>

                        
                </div>
            </div>
        </div>
    </div>
    @endsection


