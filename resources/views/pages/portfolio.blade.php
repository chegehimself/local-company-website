@extends('layouts.app')

@section('customized')
    Portfolio    
@endsection

@section('content')
    
@endsection

{{-- image section --}}

@section('image')
<div class="row">
    <div class="col-md-12">
        <div class="topic-image img-responsive thumbnail text-center">
            <img src="{{asset('imgs/inner-banner-portfolio2.jpg')}}" alt="Portfolio Image" />
        </div>
    </div>    
</div>
<div class="text-center">
    <h1>Portfolio<h1/>
</div>
@endsection

