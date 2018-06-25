@extends('layouts.app')

@section('customized')
    Home
@endsection

@section('content')
    
@endsection

{{-- image section --}}

@section('image')
<div class="row">
    <div class="col-md-12">
        <div id="slideshow" class="topic-image img-responsive thumbnail text-center">
            <div class="slideshow-container">

                <div class="mySlides">
                    <img src="{{asset('imgs/web01.png')}}" alt="Portfolio Image" />
                </div>
                <div class="mySlides">
                    <img src="{{asset('imgs/inner-banner-joinus_0.jpg')}}" alt="Portfolio Image" />
                </div>
                <div class="mySlides">
                    <img src="{{asset('imgs/inner-banner-psd.jpg')}}" alt="Portfolio Image" />
                </div>
                <div class="mySlides">
                    <img src="{{asset('imgs/inner-banner-contact.jpg')}}" alt="Portfolio Image" />
                </div>
                <div class="mySlides">
                    <img src="{{asset('imgs/inner-banner-portfolio2.jpg')}}" alt="Portfolio Image" />
                </div>  
                </br>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
                
            </div>
        </div>
    </div>    
</div>
<div class="text-center">
    <h1>Our Clients<h1/>     
</div>
@endsection

{{-- clients section --}}
@section('clients')
<div class="row clients">
        <div class="col-md-2">
            <div class="topic-image img-responsive thumbnail text-center">
                <img src="{{asset('imgs/servcorp-new.png')}}" alt="Portfolio Image" />
            </div>
        </div> 
        <div class="col-md-2">
                <div class="topic-image img-responsive thumbnail text-center">
                    <img src="{{asset('imgs/faa-new.png')}}" alt="Portfolio Image" />
                </div>
        </div> 
        <div class="col-md-2">
                <div class="topic-image img-responsive thumbnail text-center">
                    <img src="{{asset('imgs/cagamas-new.png')}}" alt="Portfolio Image" />
                </div>
            </div> 
            <div class="col-md-2">
                    <div class="topic-image img-responsive thumbnail text-center">
                        <img src="{{asset('imgs/ksb2-new.png')}}" alt="Portfolio Image" />
                    </div>
            </div> 
            <div class="col-md-2">
                    <div class="topic-image img-responsive thumbnail text-center">
                        <img src="{{asset('imgs/osk.png')}}" alt="Portfolio Image" />
                    </div>
                </div> 
                <div class="col-md-2">
                        <div class="topic-image img-responsive thumbnail text-center">
                            <img src="{{asset('imgs/landmark.png')}}" alt="Portfolio Image" />
                        </div>
                </div>          
</div>
@endsection