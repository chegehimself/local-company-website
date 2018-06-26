@extends('layouts.app')

@section('customized')
    Contact Us
@endsection

@section('content')
    
@endsection
 
{{-- image section --}}

@section('image')
<div class="row">
    <div class="col-md-12">
        <div class="img-responsive img-responsive thumbnail text-center">
            <img class="slide-img" src="{{asset('imgs/inner-banner-contact-new-1.jpg')}}" alt="Portfolio Image" />
        </div>
    </div>    
</div>
<div class="text-center">
    <h1>Contact us<h1/>
</div>
@endsection

{{-- contact form --}}
@section('contact')
<form>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="company">Company</label>
            <input class="form-control" type="text" name="company" id="company">
        </div>
        <div class="form-group">
                <label for="Name">Name*</label>
                <input class="form-control" type="text" name="compay" id="company">
            </div>
            <div class="form-group">
                    <label for="email">email</label>
                    <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="form-group">
                    <label for="phone">Phone</label>
                    <input class="form-control" type="text" name="phone" id="phone">
            </div>
            <div class="form-group">
                <label for="website">website</label>
                <input class="form-control" type="text" name="leadsrc" id="leadsrc">
            </div>
    </div>
    <div class="col-md-6">
            <div class="form-group">
                    <label for="budget">Budget</label>
                    <input class="form-control" type="text" name="budget" id="budjet">
            </div>
            <div class="form-group">
                     <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            </div>
    </div>
    </div>
    <div class="text-center">
        <button class="btn btn-primary btn-lg" disabled="disabled">Send</button>
    </div>  

</form>
@endsection