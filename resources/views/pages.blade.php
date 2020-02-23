    @extends('layouts.app')

    @section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="topnav" id="myTopnav">
                          <a href="{{ url('/')}}" class="active">Home</a>
                          <a href="{{ url('about')}}">About Us</a>
                          <a href="{{ url('contact')}}">Contact</a>
                        </div>
                    </div>


      
                  <!-- Full Page Image Background Carousel Header -->
                <header class="container">
                  <h1>{{$data->title}}</h1>
                </header>
                




                    <div class="card-body">
                      

                        {{ strip_tags($data->content)}}
                                     
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
    @endsection


