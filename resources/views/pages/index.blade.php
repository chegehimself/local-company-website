@extends('layouts.app')

@section('content')
    
@endsection

{{-- image section --}}

@section('image')
<div class="row">
    <div class="col-md-12">
        <div class="topic-image img-responsive thumbnail text-center">
            <img src="{{asset('imgs/web01.png')}}" alt="Portfolio Image" />
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