@extends('layouts.app')

@section('customized') Home @endsection

@section('content')
    
@endsection

{{-- image section --}}

@section('image')
<section>
<div class="row">
    <div class="col-md-12">
        <div id="slideshow" class="img-responsive text-center">
            <div class="slideshow-container">

                {{-- <div class="mySlides">
                    <img src="{{asset('imgs/web01.png')}}" alt="Portfolio Image" />
                </div> --}}
                {{-- slide1 --}}
                <div class="mySlides fade slideshow-1">
                <div class="row">
                    <div class="col-md-6 col-xs-6 img-responsive">
                            <p id="slide-text" class="animated fadeInLeft text-white text-center">UNLOCK THE SECRET</p>
                            <p id="slide-text" class="animated lightSpeedIn text-darker text-center">CREATE A WEB SOLUTION</p>
                            <p id="slide-text" class="animated slideInDown text-yellow text-center">THAT MOVES PEOPLE</p>
                            {{-- <img id="slide-fit" class="animated rollIn img-responsive" src="{{asset('imgs/slide-concept.png')}}" alt="portflio image" alt="Portfolio Image" /> --}}
        
                            <img id="some-flower" class="animated flash img-responsive text-center" src="{{asset('imgs/flower.png')}}" alt="portflio image" alt="Portfolio Image" />
                    </div>
                    <div class="col-sm-6 col-xs-6">
                            
                        {{-- </div> --}}
                        {{-- <div class="col-sm-6" id="slide-concept-1"> --}}
                        {{-- <img id="slide-concept-1" class="animated zoomInUp img-responsive text-right" src="{{ asset('imgs/slide-concept-2-5.png')}}" alt="portflio image"> --}}
                        <img id="slide-concept-1" class="animated slideInDown img-responsive text-right" src="{{ asset('imgs/web01.png')}}" alt="portflio image">
                        <img id="slide-concept-2" class="animated fadeInDownBig img-responsive text-right" src="{{ asset('imgs/web02_1.png')}}" alt="portflio image">
                        <img id="slide-concept-3" class="animated slideInDown img-responsive text-right" src="{{ asset('imgs/web03_0.png')}}" alt="portflio image">
                            {{-- <img id="slide-concept-4" class="animated zoomInUp img-responsive text-right" src="{{ asset('imgs/web03_0.png')}}" alt="portflio image"> --}}
                        <img id="comp-image" class="animated slideInRight img-responsive text-right" src="{{asset('imgs/desktop_0.png')}}" alt="portflio image" alt="desktop image" />
                            {{-- <img id="slide-concept-5" class="animated zoomInUp img-responsive text-right" src="{{ asset('imgs/web04.png')}}" alt="portflio image"> --}}
                            
                        </div>
                       
                </div>
            </div>
                {{-- slide2 --}}
                <div class="mySlides fade slideshow-2 img-responsive">
                <div class="row">
                    <div class="col-md-6 col-xs-6 img-responsive">
                            <p id="slide-text" class="animated lightSpeedIn text-white text-center">WE CREATE</p>
                            <p id="slide-text" class="animated slideInDown text-yellow text-center">EXPERIENCES THAT DEFINES</p>
                            {{-- <img id="slide-fit" class="animated rollIn img-responsive" src="{{asset('imgs/slide-concept.png')}}" alt="portflio image" alt="Portfolio Image" /> --}}
                            <p id="slide-text" class="animated slideInUp text-white text-center">YOUR BRAND</p>
                            {{-- <h3 class="animated swing text-yellow text-left">CREATE A WEB SOLUTION WITH US</h3>
                            <h3 class="animated tada text-yellow text-left">CREATE A WEB SOLUTION WITH US</h3>
                            <h3 class="animated jello text-yellow text-left">CREATE A WEB SOLUTION WITH US</h3> --}}
                            <img id="some-f" class="animated rotateIn img-responsive text-right" src="{{asset('imgs/flower3.png')}}" alt="portflio image" alt="Portfolio Image" />
                        </div>
                        <div class="col-md-6 col-xm-6">
                            <img id="slide-fit" class="animated flipInY img-responsive text-right" src="{{asset('imgs/web04.png')}}" alt="portflio image" alt="Portfolio Image" />
                            {{-- <img id="slide-fit" class="animated flipInY img-responsive text-left" src="{{asset('imgs/2_2.png')}}" alt="portflio image" alt="Portfolio Image" /> --}}
                            {{-- <img id="slide-fit" class="animated zoomInRight img-responsive text-right" src="{{ asset('imgs/slide-concept-2-5.png')}}" alt="portflio image"> --}}
                        </div>
                    </div>
                </div>
                {{-- slide3 --}}
{{--                 <div class="mySlides">
                    <div class="col-md-6 col-xs-6">
                            <p id="slide-text" class="animated slideInDown text-white text-left">WE CREATE</p>
                            <p id="slide-text" class="animated slideInDown text-white text-left">EXPERIENCIES</p>
                            <p id="slide-text" class="animated lightSpeedIn text-yellow text-left">THAT DEFINES YOUR BRAND</p>
                            <img id="slide-fit" class="animated rollIn img-responsive" src="{{asset('imgs/slide-concept.png')}}" alt="portflio image" alt="Portfolio Image" />
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <img id="slide-fit" class="animated jello img-responsive text-right" src="{{asset('imgs/display-1.png')}}" alt="portflio image" alt="Portfolio Image" />
                        <img id="slide-fit" class="animated zoomInRight img-responsive text-right" src="{{ asset('imgs/slide-concept-2-5.png')}}" alt="portflio image">
                    </div>
                </div> --}}

                {{-- slide4 --}}
                <div class="mySlides fade slideshow-3">
{{--                         <div class="col-md-6 col-xs-6">
                            <p id="slide-text" class="animated slideInDown text-white text-left">TURNING YOUR WEBSITE</p>
                            <p id="slide-text" class="animated lightSpeedIn text-white text-left">FROM COST CENTER</p>
                            <p id="slide-text" class="animated slideInDown text-yellow text-left">TO PROFIT CENTER</p> --}}
                            {{-- <img id="slide-fit" class="animated rollIn img-responsive" src="{{asset('imgs/slide-concept.png')}}" alt="portflio image" alt="Portfolio Image" /> --}}
                        {{-- </div> --}}
                    {{--     <div class="col-md-6 col-xs-6">
                            <img id="slide-fit" class="animated flipInY img-responsive text-right" src="{{asset('imgs/6_0.png')}}" alt="portflio image" alt="Portfolio Image" /> --}}
                            {{-- <img id="slide-fit" class="animated zoomInRight img-responsive text-right" src="{{ asset('imgs/slide-concept-2-5.png')}}" alt="portflio image"> --}}
                        {{-- </div> --}}
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                            <img id="slide-design" class="animated tada img-responsive text-right" src="{{asset('imgs/diagram_1.png')}}" alt="portflio image" alt="Portfolio Image" />
                            </div>
                        </div>
                </div>
                <br>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span>
                    {{-- <span class="dot" onclick="currentSlide(4)"></span>  --}}
                </div>
                
            </div>
        </div>
    </div>    
</div>
<div class="text-center">
    <h1>Our Clients</h1>     
</div></section>

@endsection

{{-- clients section --}}
@section('clients')
<section>
<div class="row clients">
        <div class="col-md-2 col-xs-2">
            <div class="topic-image text-center">
                <img class="animated infinite slideInLeft clientele-img img-responsive" src="{{asset('imgs/servcorp-new.png')}}" alt="Portfolio Image" />
            </div>
        </div> 
        <div class="col-md-2 col-xs-2">
                <div class="topic-image text-center">
                    <img class="animated infinite slideInLeft clientele-img img-responsive" src="{{asset('imgs/faa-new.png')}}" alt="Portfolio Image" />
                </div>
        </div> 
        <div class="col-md-2 col-xs-2">
                <div class="topic-image text-center">
                    <img class="animated infinite slideInLeft clientele-img img-responsive" src="{{asset('imgs/cagamas-new.png')}}" alt="Portfolio Image" />
                </div>
            </div> 
            <div class="col-md-2 col-xs-2">
                    <div class="topic-image text-center">
                        <img class="animated infinite slideInLeft clientele-img img-responsive" src="{{asset('imgs/ksb2-new.png')}}" alt="Portfolio Image" />
                    </div>
            </div> 
            <div class="col-md-2 col-xs-2 ">
                    <div class="topic-image text-center">
                        <img class="animated infinite slideInLeft clientele-img img-responsive" src="{{asset('imgs/osk.png')}}" alt="Portfolio Image" />
                    </div>
                </div> 
                <div class="col-md-2 col-xs-2 ">
                        <div class="topic-image text-center">
                            <img class="animated infinite slideInLeft clientele-img img-responsive" src="{{asset('imgs/landmark.png')}}" alt="Portfolio Image" />
                        </div>
                </div>          
</div>
<div class="row clients clients-second-row">
        <div class="col-md-2 col-xs-2">
            <div class="topic-image text-center">
                <img class="animated infinite slideInLeft clientele-img img-responsive" src="{{asset('imgs/bimb-new.png')}}" alt="Portfolio Image" />
            </div>
        </div> 
        <div class="col-md-2 col-xs-2">
                <div class="topic-image text-center">
                    <img class="animated infinite slideInLeft clientele-img img-responsive" src="{{asset('imgs/bimb-new.png')}}" alt="Portfolio Image" />
                </div>
        </div> 
        <div class="col-md-2 col-xs-2">
                <div class="topic-image text-center">
                    <img class="animated infinite slideInLeft clientele-img img-responsive" src="{{asset('imgs/fam-new.png')}}" alt="Portfolio Image" />
                </div>
            </div> 
            <div class="col-md-2 col-xs-2">
                    <div class="topic-image text-center">
                        <img class="animated infinite slideInLeft clientele-img img-responsive" src="{{asset('imgs/kip-new.png')}}" alt="Portfolio Image" />
                    </div>
            </div> 
            <div class="col-md-2 col-xs-2">
                    <div class="topic-image text-center">
                        <img class="animated infinite slideInLeft clientele-img img-responsive" src="{{asset('imgs/mceb2-new.png')}}" alt="Portfolio Image" />
                    </div>
                </div> 
                <div class="col-md-2 col-xs-2">
                        <div class="topic-image text-center">
                            <img class="animated infinite slideInLeft clientele-img img-responsive" src="{{asset('imgs/mdec-new.png')}}" alt="Portfolio Image" />
                        </div>
                </div>          
</div>
</section>
@endsection

@section('afterimg')

        <h1><strong> CAN WE HELP? </strong></h1>
    <p class="container well well-1">
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
                    <h1>WEB MAINTENANCE</h1>
            </div>
            <p>You’ve built and launched your website (phew!) but it’s not over yet, this is just the beginning!
                    Keeping your content and web design up-to-date is the secret to online success. Subscribe for
                     our maintenance plan and let professionals take care of that.
            </p>
            <a href="/web-maintenance"><button id="read-more" class="btn btn-primary btn-lg btn-maintenance">READ MORE</button></a>
        </div>
        <div class="col-md-4 row-eq-height">
            <div id="marketing-header-1" class="m-header">
                <p>
                    <i id="cog" class="fa fa-desktop"></i>
                </p>
                    <h1 class="deesign">WEB DESIGN</h1>
            </div>
            <p>
                We offer: A completely new website
                    A website revamp
                    Have you heard about responsive web design?
                    Nowadays, mobile devices are used more for searching online than desktops. That’s why it’s 
                    a MUST to have a mobile responsive web design. You don’t want your visitors to come and leave 
                    immediately just because your website is not user-friendly. In Icarus, we deliver 100% 
                    responsive web design.
            </p>
            <a href="/web-design"><button id="read-more"  class="btn btn-primary btn-lg btn-design">READ MORE</button></a>
        </div>
        <div class="col-md-4 row-eq-height">
                <div id="marketing-header-2" class="m-header">
                    <div id="icon-header">
                        <i id="cog" class="fa fa-cart-arrow-down"></i>
                        {{-- s<ion-icon name="cart"></ion-icon> --}}
                    </div>
                        <h1>ECOMERCE</h1>
                </div>
            <div id="ecomerce">
            <p>
                Are you searching for the best eCommerce web design service?
                Implement your e-commerce master plan with Icarus E-commerce solution and get your web-shop
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
            <h1><strong>WHY ICARUS?</strong></h1>
            <p class=" container well text-center">
            You are looking at one of the best web design companies. Since 2007, we have created over 500 web designs for 
            companies of all sizes and industries worldwide. 
                         </p>
    </div>
    <div class="row text-center">
            <div class="col-md-3">
                <p><i class="fa fa-book" aria-hidden="true"></i></p>
                <h4> Content Management </h4>
                   <p> We will teach you, how to easily update your content, manage your posts, 
                   pages and categories from one central administrative area.
                </p>
            </div>
            <div class="col-md-3">
                    <p><i class="fa fa-search"></i></p>
                    <h4> Powerful SEO </h4>
                <p>
                Icarus's skillful optimization will help your business rank higher than your competitors 
                in search engines like Google.
                </p>
            </div>
            <div class="col-md-3">
                    <p><i class="fa fa-picture-o"></i></p>
                    <h4> Interactive Banners</h4>
                <p>
                    Easily set-up your interactive banners with your latest promotions, news, 
                    and events on your home page.
                </p>
            </div>
            <div class="col-md-3">
                    <p><i class="fa fa-chrome"></i></p>
                    <h4> Responsive Web Design </h4>
                <p>
                        
                        No matter, what device are your visitors using. With a responsive web design, 
                        all of them get the same user experience.
                </p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3">
                    <p><i class="fa fa-handshake-o"></i></p>
                    <h4> Zero Technical Knowledge Required </h4>
                <p>
                        
                        No software to install, no scripts to upload, no annoying plugins to work with. Our system is easy-to-use.
                </p>
            </div>
            <div class="col-md-3">
                    <p><i class="fa fa-envelope-open"></i></p>
                    <h4> Email Newsletter System </h4>
                <p>
                    
                    Build and manage and send your emails with confidence! Our Newsletter system is social media-friendly. 
                    Track your email campaigns with a built-in reporting system!
                </p>
            </div>
            <div class="col-md-3">
                    <p><i class="fa fa-bolt"></i></p>
                    <h4> One Simple Solution for Everything </h4>
                <p>
                
                With Icarus, you have control over everything with one simple centralized location. Saves you both 
                time and money.
                </p>
            </div>
            <div class="col-md-3">
                    <p><i class="fa fa-google"></i></p>
                    <h4>Google Analytics</h4>
                <p>
                
                    Track your visitors’ behavior, demographic, interests and get useful reports on all your website traffic. 
                    We automatically integrate Google Analytics with your website.
                </p>
                </div>
            </div>
        </div>
@endsection