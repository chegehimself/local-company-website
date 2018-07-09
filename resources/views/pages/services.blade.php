@extends('layouts.app')

@section('content')
@endsection

@section('customized')
    services
@endsection
{{-- image section --}}

@section('image')
<div class="row">
    <div class="col-md-12">
        <div class="img-responsive thumbnail text-center">
            <img class="slide-img" src="{{asset('imgs/inner-banner-contact.jpg')}}" alt="Portfolio Image" />
        </div>
    </div>    
</div>
<div class="text-center">
        <h1 class="text-center">SERVICES</h1>
</div>
<div class="text-center container-fluid">
    <p>
        Icarus Technologies is an Information Technology company (IT) in Kenya that consults & offers various services and technology solutions. We deliver value through our integrated solutions & services to SME'S, Banking and Finance institutions, Insurance Companies, various Education Sector players, Health Care Entities & Travel Companies. we research , conceptualize, create, DEConstruct & reverse


    </p>
</div>
<div class="container text-center"> 
<div id="all-design" class="row">
    <div id="design" class="push text-center col-md-7">
        <h4 class="container-fluid"><strong><span class="nums1 text-left"> 1 </span> <span class="brag">WEBSITE DESIGN!</span></strong></h4>
        <p class="paragraph-design text-center">    
        We design and develop quality websites for businesses, individuals and corporate clients. We carve perfect designs to build creative websites that engage users on both desktop and mobile devices.
        </p>
    </div>
    <div class="col-md-5">
        <img class="img-responsive" src="{{asset('imgs/webdesign01-new.gif')}}" alt="image for web design">
    </div>
</div>

{{-- second row--}}
<div id="design-row" class="row">
    <div id="design" class="push text-center col-md-7">
        <h4><strong><span class="nums1"> 2 </span> E-COMMERCE SOLUTIONS</strong></h4>
        <p class="paragraph-design text-center">   
        E-commerce is so much more than an online shopping cart, and it’s not one size fits all. We build highly customized E commerce platforms that harmoniously combine form, functionality and flexibility.
    </p>
    </div>
    <div class="col-md-5">
        <img class="img-responsive" src="{{asset('imgs/webdesign02.gif')}}" alt="image for web design">
    </div>
</div>

{{-- 3rd row --}}

<div id="adesign-row" class="row">
    <div id="design" class="push text-center col-md-7">
        <h4><strong><span class="nums1"> 3 </span> WEB APPLICATIONS</strong></h4>
           <p class="paragraph-design text-center"> 
            We have developed and implemented a number of interesting and useful ready-made, highly customizable web applications that can be added to your business.
        </p>
    </div>
    <div class="col-md-5">
        <img class="img-responsive" src="{{asset('imgs/webdesign03.gif')}}" alt="image for design">
    </div>
</div>

{{-- 4th colmn --}}
<div id="all-design" class="row">
    <div id="design" class="push text-center col-md-7">
        <h4><strong><span class="nums1"> 4 </span>CUSTOMIZED DESKTOP APPLICATIONS</strong></h4>
        <p class="paragraph-design text-center">
        We build custom software applications to do exactly what you need in a way that makes sense for your business. Bring us your problem and we’ll construct the best, most effective software solutions.
        </p>
    </div>
    <div class="col-md-5">
        <img class="img-responsive" src="{{asset('imgs/webdesign04.gif')}}" alt="image for design">
    </div>
</div>

{{-- 5th row --}}

<div id="all-design" class="row">
    <div id="design" class="push text-center col-md-7">
        <h4><strong><span class="nums1 text-center"> 5 </span> MOBILE APPLICATIONS</strong></h4>
           <p class="paragraph-design text-center"> 
            Intuitive designs combined with compelling user experience are what makes our apps stand ahead in the digital age. Seamless experience driven by international standards in collaboration with out-of-the-box ideas is the specialty of Icarus apps helping your business accomplish its goals.
        </p>
    </div>
    <div class="col-md-5">
        <img class="img-responsive" src="{{asset('imgs/webdesign05_0.gif')}}" alt="image for design">
    </div>
</div>

{{-- 6th row --}}

<div id="all-design" class="row">
    <div id="design" class="push text-center col-md-7">
        <h4><strong><span class="nums1 text-center"> 6 </span> IT CONSULTING</strong></h4>
           <p class="paragraph-design text-center"> 
            Hiring IT employees at times may be costlly to a business. That is why most companies prefer outsourcing their services. At Icarus, we offer affordable IT consulting services on networking, IT office support & troubleshooting, Information security & IT asset management
        </p>
    </div>
    <div class="col-md-5">
        <img class="img-responsive" src="{{asset('imgs/webdesign06_1.gif')}}" alt="image for design">
    </div>
</div>

{{-- 7th row --}}

<div id="all-design" class="row">
    <div id="design" class="push text-center col-md-7">
        <h4><strong><span class="nums1 text-center"> 7 </span> DIGITAL MARKETING</strong></h4>
           <p class="paragraph-design text-center">          
            Developing a long-term and reliable marketing strategy that will flourish and live a longer life, while ensuring your customers stay with you and tell the world the tales of your business’s awesomeness transforming our custom-made business strategies into real time success.
        </p>
    </div>
    <div class="col-md-5">
        <img class="img-responsive" src="{{asset('imgs/webdesign07_0.gif')}}" alt="image for design">
    </div>
</div>

{{-- 8th row --}}

<div id="all-design" class="row">
    <div id="design" class="push text-center col-md-7">
        <h4><strong><span class="nums1 text-center"> 8 </span> BULK SMS</strong></h4>
           <p class="paragraph-design text-center"> 
            Sending out message campaigns requires having a fast SMs gateway and API that sends out the messages in bulk instantly. At Icarus, we offer SMS API and bulk SMS at a competitive price that makes us unique. With our API, you can send upto 10,000 SMS with a single click
        </p>
    </div>
    <div class="col-md-5">
        <img class="img-responsive" src="{{asset('imgs/webdesign08.gif')}}" alt="image for design">
    </div>
</div>

</div>
@endsection


