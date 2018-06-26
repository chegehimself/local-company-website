@extends('layouts.app')

@section('customized')
    Blog
@endsection

{{-- image section --}}

@section('image')
<div class="row">
    <div class="col-md-12">
        <div class="img-responsive thumbnail text-center">
            <img class="slide-img" src="{{asset('imgs/inner-banner-blog_0.jpg')}}" alt="Portfolio Image" />
        </div>
    </div>    
</div>
<div class="text-center">
    <h1>BLOG<h1/>
</div>
@endsection


@section('blogs')
<div class="row">
    <div id="blog-post" class="col-md-4">
        <p>
        <h4>5 Big Mistakes that Chase Away Your Website Visitors</h4>
        Having visitors stick around on your website can be quite difficult.
        There are a lot of factors that play into the engagement of your visitors.
        From how the website is… <a class="blog-more"href="#">more</a>
        </p>
    </div>
    <div id="blog-post" class="col-md-4">
        <p>
        <h4>9 Reasons Why You Should Maintain Your Website</h4>
        While it may seem that once a website is online the task is complete, 
        this is far from the truth. Maintaining a website is a continuous task 
        that ensures that the site is… <a class="blog-more"href="#">more</a>
        </p>
    </div>
    <div id="blog-post" class="col-md-4">
        <p> <h4>Top 5 companies that uses a circle for their logo</h4>
             Throughout the history of design, circles were often used for creating memorable 
            and timeless logos. At first glance it may not seem as much, but 
            there is meaning behind the… <a class="blog-more"href="#">more</a>
        </p>
    </div>
</div>

<div class="row">
        <div id="blog-post" class="col-md-4">
            <p>
                    <h4>Top Tips to Maximise Working With Your Web Designer</h4>
                    If you've decided to upgrade, update, or redesign your website, 
                    you will be looking to collaborate with a web design specialist who 
                    can help you to achieve your online… <a class="blog-more"href="#">more</a>
            </p>
        </div>
        <div id="blog-post" class="col-md-4">
            <p>
                    <h4>4 Top Tips for Incorporating Background Videos Into Your Web Design</h4>
                    No doubts you’ve seen a greater increase in the number of modern websites 
                    that are choosing to incorporate background videos into their landing pages.
                     It’s no surprise as… <a class="blog-more"href="#">more</a>
            </p>
        </div>
        <div id="blog-post" class="col-md-4">
            <p> <h4>The Art of The Brand Refresh</h4>
                    It can be easy to overlook the idea of refreshing and revamping your brand’s 
                    identity. Once you’ve developed a website that fulfils its purpose and acts 
                    as a gateway to… <a class="blog-more"href="#">more</a>
            </p>
        </div>
    </div>

    <div class="row">
            <div id="blog-post" class="col-md-4">
                <p>
                        <h4>Three Bad Web Design Mistakes that Must Be Avoided</h4>
                        While having a website can give a promising image of your business, 
                        a bad website can be detrimental to your brand. You don’t want to lose 
                        out on prospective customers so…  <a class="blog-more"href="#">more</a>
                </p>
            </div>
            <div id="blog-post" class="col-md-4">
                <p>
                        <h4>Do You Really Need an App?</h4>
                        It seems these days everyone has an app; the local pizza restaurant, your gym,
                         perhaps even your school or workplace. While an exploding trend in this 
                         connected age, going… <a class="blog-more"href="#">more</a>
                </p>
            </div>
            <div id="blog-post" class="col-md-4">
                <p> <h4>Can Great Web Design Increase Your Profits?</h4>
                        Although many businesses continue to trade in a traditional way, it’s essential 
                        for companies to have an online presence as well. In an increasingly 
                        technological world, an… <a class="blog-more"href="#">more</a>
                </p>
            </div>
        </div>
@endsection
