@extends('layouts.app')

@section('content')
@endsection

@section('customized')
    Web design
@endsection
{{-- image section --}}

@section('image')
<div class="row">
    <div class="col-md-12">
        <div class="img-responsive thumbnail text-center">
            <img class="slide-img" src="{{asset('imgs/inner-banner-webdesign.jpg')}}" alt="Portfolio Image" />
        </div>
    </div>    
</div>
<div class="text-center">
        <h1 class="text-center">WEB DESIGN SERVICES</h1>
</div>
<div class="text-center">
    <p><h1><b><span class="text-orange"><span class="nums text-center"> 8 </span>REASONS</span></b></h1></p>
    <h3> To Use Icarus to Build your Website</h3>
    <p>
        Your website is your storefont. Don't risk damaging your business and your brand by leaving it in the hands of amatuers!
        Here's 8 Reasons why Icarus is the ultimate choice as your Website development partner.
    </p>
</div>
<div class="container text-center"> 
<div id="all-design" class="row">
    <div id="design" class="push text-center col-md-7">
        <h2 class="container-fluid"><strong><span class="nums1 text-left"> 1 </span> <span class="brag">We've been around for a LONG time!</span></strong></h2>
        <p class="paragraph-design text-left">    
        Our team has been serving Malaysian 
            businesses since 2007. We are here to stay.
            To be more specific, we have created over 
            500 websites and counting. Make no mistake 
            about this, you can trust us to be your
            partner to support your business as it grows 
            and evolves over the long term.
            
            And remember, with our long track record of 
            satisfied clients which include some of Malaysia's top 
            corporations, you no longer have to be concerned about 
            your web development partner closing shop and 
            leaving you in a difficult position.
        </p>
    </div>
    <div class="col-md-5">
        <img class="img-responsive" src="{{asset('imgs/webdesign01-new.gif')}}" alt="image for malysia">
    </div>
</div>

{{-- second row--}}
<div id="design-row" class="row">
    <div id="design" class="push text-center col-md-7">
        <h3><strong><span class="nums1"> 2 </span> We Transform your website from a Cost Centre to a Profit Centre.</strong></h3>
        <p class="paragraph-design text-left">   
        Many business treat their website as an expense. Truth be told, with most web design companies that would be the case because they DO NOT possess the
        expertise to create a website that saves you money and grows your business.

        With Icarus, we will leverage your website to save you money and grow your business in areas that you never thought of before! That is the power of working with a company that has experience and expertise.
    </p>
    </div>
    <div class="col-md-5">
        <img class="img-responsive" src="{{asset('imgs/webdesign02.gif')}}" alt="image for malysia">
    </div>
</div>

{{-- 3rd row --}}

<div id="adesign-row" class="row">
    <div id="design" class="push text-center col-md-7">
        <h2><strong><span class="nums1"> 3 </span> We have a large team of designers and programmers!</strong></h2>
           <p class="paragraph-design text-left"> 
            Whether you want a simple website or a complex one that can perform amazing functions, Icarus has the solution for you. I can't stress this enough: our team of designers and programmers have been doing it for years for some of Malaysia's largest corporations and government agencies. Be assured that you are in the hands of the best professionals in Web development and design in the marketplace!
        </p>
    </div>
    <div class="col-md-5">
        <img class="img-responsive" src="{{asset('imgs/webdesign03.gif')}}" alt="image for malysia">
    </div>
</div>

{{-- 4th colmn --}}
<div id="all-design" class="row">
    <div id="design" class="push text-center col-md-7">
        <h2><strong><span class="nums1"> 4 </span>We've won international awards</strong></h2>
        <p class="paragraph-design text-left">The fact is, not only do we boast an impressive portfolio of clients, our work has earned us the prestigious International Web Marketer's Association Award.Won't you rather be safe than sorry? Your business and website needs the best team behind it, don't settle for second best! You'll be in safe hands with our award-winning team.
        </p>
    </div>
    <div class="col-md-5">
        <img class="img-responsive" src="{{asset('imgs/webdesign04.gif')}}" alt="image for malysia">
    </div>
</div>

{{-- 5th row --}}

<div id="all-design" class="row">
    <div id="design" class="push text-center col-md-7">
        <h2><strong><span class="nums1 text-center"> 5 </span> We make your website scalable</strong></h2>
           <p class="paragraph-design text-left"> 
            Let's face it, your business will grow over time, and the business environment will change. If your website cannot adapt to these changes and support your growth, your business growth could be hindered by your website.

            What makes us so special is that we will build your website with your ultimate vision in mind. This means we can build upon your existing website, to grow and support your organisation as it grows and evolves. Reality is, you don't want to make the mistake of building a website that cannot scale and evolve with your business!

            It simply costs more to rebuild your website later!
        </p>
    </div>
    <div class="col-md-5">
        <img class="img-responsive" src="{{asset('imgs/webdesign05_0.gif')}}" alt="image for malysia">
    </div>
</div>

{{-- 6th row --}}

<div id="all-design" class="row">
    <div id="design" class="push text-center col-md-7">
        <h2><strong><span class="nums1 text-center"> 6 </span> We provide customised solutions</strong></h2>
           <p class="paragraph-design text-left"> 
            One thing is for sure: your business and vision is unique and powerful - you should not settle for a one-size fits all package that can't accomodate your vision and business growth.

            At Icarus, we work with you to create customised solutions based on your unique business requirements. Nothing is impossible for us! What's more, we deliver only a responsible web design.
        </p>
    </div>
    <div class="col-md-5">
        <img class="img-responsive" src="{{asset('imgs/webdesign06_1.gif')}}" alt="image for malysia">
    </div>
</div>

{{-- 7th row --}}

<div id="all-design" class="row">
    <div id="design" class="push text-center col-md-7">
        <h2><strong><span class="nums1 text-center"> 7 </span> We provide ongoing, professional consultations</strong></h2>
           <p class="paragraph-design text-left"> 
            This may seem strange but our philosophy of doing business is different to others. We see our clients as partners in our business. Not as a once-off transaction.

            And that's why we have ongoing consultations with our clients to ensure that their websites are continuously supporting their business objectives. To top it off, we are constantly on the cutting-edge of web development, looking for new technologies and services that will help your business save money and grow faster.
        </p>
    </div>
    <div class="col-md-5">
        <img class="img-responsive" src="{{asset('imgs/webdesign07_0.gif')}}" alt="image for malysia">
    </div>
</div>

{{-- 8th row --}}

<div id="all-design" class="row">
    <div id="design" class="push text-center col-md-7">
        <h2><strong><span class="nums1 text-center"> 8 </span> Our Track Record Speaks for Itself</strong></h2>
           <p class="paragraph-design text-left"> 
            It's no accident hundreds of the largest companies and organisations in Malaysia see Icarus as their preferred web design partner. Don't take our word for it...check out our impressive portfolio which boasts some of the region's top businesses, government agencies and NGOs here today.
        </p>
    </div>
    <div class="col-md-5">
        <img class="img-responsive" src="{{asset('imgs/webdesign08.gif')}}" alt="image for malysia">
    </div>
</div>

</div>
@endsection


