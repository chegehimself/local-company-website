@extends('layouts.app')

@section('customized')
    Blog
@endsection

{{-- image section --}}

@section('image')
<div class="row">
    <div class="col-md-12">
        <div class="topic-image img-responsive thumbnail text-center">
            <img src="{{asset('imgs/inner-banner-blog_0.jpg')}}" alt="Portfolio Image" />
        </div>
    </div>    
</div>
<div class="text-center">
    <h1>BLOG<h1/>
</div>
@endsection


@section('blogs')
<div class="row">
    <div class="col-md-4">
        <p>
        5 Big Mistakes that Chase Away Your Website Visitors
        Having visitors stick around on your website can be quite difficult.
        There are a lot of factors that play into the engagement of your visitors.
        From how the website is… more
        </p>
    </div>
    <div class="col-md-4">
        <p>
        9 Reasons Why You Should Maintain Your Website
        While it may seem that once a website is online the task is complete, 
        this is far from the truth. Maintaining a website is a continuous task 
        that ensures that the site is… more
        </p>
    </div>
    <div class="col-md-4">
        <p> Top 5 companies that uses a circle for their logo Throughout the history of design, circles were often used for creating memorable and timeless logos. At first glance it may not seem as much, but there is meaning behind the… more
        </p>
    </div>
</div>
@endsection
