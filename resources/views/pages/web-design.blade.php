@extends('layouts.app')

@section('content')
@endsection

{{-- image section --}}

@section('image')
<div class="row">
    <div class="col-md-12">
        <div class="topic-image img-responsive thumbnail text-center">
            <img src="{{asset('imgs/inner-banner-contact-new-1.jpg')}}" alt="Portfolio Image" />
        </div>
    </div>    
</div>
<div class="text-center">
        <h1 class="text-center">WEB DESIGN SERVICES</h1>
</div>
<div id="all-design" class="text-center"> 
<div class="row container">
    <div id="design" class="push text-center col-md-7">
            <h2><strong>We've been around for a LONG time!</strong></h2>
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
    </div>
    <div class="col-md-5">
        <img class="img-responsive" src="{{asset('imgs/webdesign01-new.gif')}}" alt="image for malysia">
    </div>
</div>
</div>
@endsection


