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
        <div id="slideshow" class="img-responsive thumbnail text-center">
            <div class="slideshow-container">

                {{-- <div class="mySlides">
                    <img src="{{asset('imgs/web01.png')}}" alt="Portfolio Image" />
                </div> --}}
                <div class="mySlides fade">
                    <img class="slide-img" src="{{asset('imgs/inner-banner-joinus_0.jpg')}}" alt="Portfolio Image" />
                </div>
                <div class="mySlides fade">
                    <img class="slide-img" src="{{asset('imgs/inner-banner-psd.jpg')}}" alt="Portfolio Image" />
                </div>
                <div class="mySlides fade">
                    <img class="slide-img" src="{{asset('imgs/inner-banner-contact.jpg')}}" alt="Portfolio Image" />
                </div>
                <div class="mySlides fade">
                    <img class="slide-img" src="{{asset('imgs/inner-banner-portfolio2.jpg')}}" alt="Portfolio Image" />
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
                    <span class="dot" onclick="currentSlide(4)"></span> 
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
            <div class="topic-image img-responsive text-center">
                <img class="clientele-img img-responsive" src="{{asset('imgs/servcorp-new.png')}}" alt="Portfolio Image" />
            </div>
        </div> 
        <div class="col-md-2">
                <div class="topic-image img-responsive text-center">
                    <img class="clientele-img img-responsive" src="{{asset('imgs/faa-new.png')}}" alt="Portfolio Image" />
                </div>
        </div> 
        <div class="col-md-2">
                <div class="topic-image img-responsive text-center">
                    <img class="clientele-img img-responsive" src="{{asset('imgs/cagamas-new.png')}}" alt="Portfolio Image" />
                </div>
            </div> 
            <div class="col-md-2">
                    <div class="topic-image img-responsive text-center">
                        <img class="clientele-img img-responsive" src="{{asset('imgs/ksb2-new.png')}}" alt="Portfolio Image" />
                    </div>
            </div> 
            <div class="col-md-2">
                    <div class="topic-image img-responsive text-center">
                        <img class="clientele-img img-responsive" src="{{asset('imgs/osk.png')}}" alt="Portfolio Image" />
                    </div>
                </div> 
                <div class="col-md-2">
                        <div class="topic-image img-responsive text-center">
                            <img class="clientele-img img-responsive" src="{{asset('imgs/landmark.png')}}" alt="Portfolio Image" />
                        </div>
                </div>          
</div>
<div class="row clients clients-second-row">
        <div class="col-md-2">
            <div class="topic-image img-responsive text-center">
                <img class="clientele-img img-responsive" src="{{asset('imgs/bimb-new.png')}}" alt="Portfolio Image" />
            </div>
        </div> 
        <div class="col-md-2">
                <div class="topic-image img-responsive text-center">
                    <img class="clientele-img img-responsive" src="{{asset('imgs/bimb-new.png')}}" alt="Portfolio Image" />
                </div>
        </div> 
        <div class="col-md-2">
                <div class="topic-image img-responsive text-center">
                    <img class="clientele-img img-responsive" src="{{asset('imgs/fam-new.png')}}" alt="Portfolio Image" />
                </div>
            </div> 
            <div class="col-md-2">
                    <div class="topic-image img-responsive text-center">
                        <img class="clientele-img img-responsive" src="{{asset('imgs/kip-new.png')}}" alt="Portfolio Image" />
                    </div>
            </div> 
            <div class="col-md-2">
                    <div class="topic-image img-responsive text-center">
                        <img class="clientele-img img-responsive" src="{{asset('imgs/mceb2-new.png')}}" alt="Portfolio Image" />
                    </div>
                </div> 
                <div class="col-md-2">
                        <div class="topic-image img-responsive text-center">
                            <img class="clientele-img img-responsive" src="{{asset('imgs/mdec-new.png')}}" alt="Portfolio Image" />
                        </div>
                </div>          
</div>
@endsection

@section('afterimg')
    <p><strong><h1> CAN WE HELP?</h1></strong></p>
    <p>
        Web design and development are our passion and we’re eager to prove it to you. 
        Team up with us for a detailed web maintenance, creative web design or a secure
        eCommerce, and we will take your website to a whole new level, where conversion 
        rates escalate.
    </p>
    <div id="marketing" class="row text-left">
        <div class="col-md-4 row-eq-height">
            <div id="marketing-header" class="m-header">
                    <p>
                        <i id="cog" class="fa fa-cog"></i>
                    </p>
                <p>
                    <h1>WEB MAINTENANCE</h1>
                </p>
            </div>
            <p>You’ve built and launched your website (phew!) but it’s not over yet, this is just the beginning!
                    Keeping your content and web design up-to-date is the secret to online success. Subscribe for
                     our maintenance plan and let professionals take care of that.
            </p>
            <button id="read-more" class="btn btn-primary btn-lg btn-maintenance">READ MORE</button>
        </div>
        <div class="col-md-4 row-eq-height">
            <div id="marketing-header-1" class="m-header">
                <p>
                    <i id="cog" class="fa fa-desktop"></i>
                </p>
                <p class="deesign">
                    <h1>WEB DESIGN</h1>
                </p>
            </div>
            <p>
                We offer: A completely new website
                    A website revamp
                    Have you heard about responsive web design?
                    Nowadays, mobile devices are used more for searching online than desktops. That’s why it’s 
                    a MUST to have a mobile responsive web design. You don’t want your visitors to come and leave 
                    immediately just because your website is not user-friendly. In Orangesoft, we deliver 100% 
                    responsive web design.
            </p>
            <button id="read-more"  class="btn btn-primary btn-lg btn-design">READ MORE</button>
        </div>
        <div class="col-md-4 row-eq-height">
                <div id="marketing-header-2" class="m-header">
                    <div id="icon-header">
                        <i id="cog" class="fa fa-cart-arrow-down"></i>
                        {{-- s<ion-icon name="cart"></ion-icon> --}}
                    </div>
                    <p>
                        <h1>ECOMERCE</h1>
                    </p>
                </div>
            <div id="ecomerce">
            <p>
                Are you searching for the best eCommerce web design service?
                Implement your e-commerce master plan with Orangesoft E-commerce solution and get your web-shop
                started! Don't waste your time struggling, we are here to help you.
            </p>
            </div>
            
            <button id="read-more"  class="btn btn-primary btn-lg btn-ecomerce">READ MORE</button>
        </div>
    </div>
@endsection

@section('why-orange')
    <div id="why" class="contatiner why">
    <div class="container text-center">
            <p><b><strong><h1>WHY ORANGESOFT?</h1></strong></b></p>
            <p class="text-center">
            You are looking at one of the best web design companies. Since 2007, we have created over 500 web designs for 
            companies of all sizes and industries worldwide. 
                         </p>
    </div>
    <div class="row text-center">
            <div class="col-md-3">
                <p><i class="fa fa-book" aria-hidden="true"></i></p>
                <p><h4> Content Management </h4></p>
                   <p> We will teach you, how to easily update your content, manage your posts, 
                   pages and categories from one central administrative area.
                </p>
            </div>
            <div class="col-md-3">
                    <p><i class="fa fa-search"></i></p>
                    <p><h4> Powerful SEO </h4></p>
                <p>
                OrangeSoft's skillful optimization will help your business rank higher than your competitors 
                in search engines like Google.
                </p>
            </div>
            <div class="col-md-3">
                    <p><i class="fa fa-picture-o"></i></p>
                    <p><h4> Interactive Banners</h4></p>
                <p>
                    Easily set-up your interactive banners with your latest promotions, news, 
                    and events on your home page.
                </p>
            </div>
            <div class="col-md-3">
                    <p><i class="fa fa-chrome"></i></p>
                    <p><h4> Responsive Web Design </h4></p>
                <p>
                        
                        No matter, what device are your visitors using. With a responsive web design, 
                        all of them get the same user experience.
                </p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3">
                    <p><i class="fa fa-handshake-o"></i></p>
                    <p><h4> Zero Technical Knowledge Required </h4></p>
                <p>
                        
                        No software to install, no scripts to upload, no annoying plugins to work with. Our system is easy-to-use.
                </p>
            </div>
            <div class="col-md-3">
                    <p><i class="fa fa-envelope-open"></i></p>
                    <p><h4> Email Newsletter System </h4></p>
                <p>
                    
                    Build and manage and send your emails with confidence! Our Newsletter system is social media-friendly. 
                    Track your email campaigns with a built-in reporting system!
                </p>
            </div>
            <div class="col-md-3">
                    <p><i class="fa fa-bolt"></i></p>
                    <p><h4> One Simple Solution for Everything </h4></p>
                <p>
                
                With Orangesoft, you have control over everything with one simple centralized location. Saves you both 
                time and money.
                </p>
            </div>
            <div class="col-md-3">
                    <p><i class="fa fa-google"></i></p>
                    <p><h4>Google Analytics</h4></p>
                <p>
                
                    Track your visitors’ behavior, demographic, interests and get useful reports on all your website traffic. 
                    We automatically integrate Google Analytics with your website.
                </p>
                </div>
            </div>
        </div>
@endsection