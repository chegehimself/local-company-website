@extends('layouts.app')

@section('customized')
    Portfolio    
@endsection

{{-- @section('content')
@endsection --}}

{{-- image section --}}

@section('image')
<div class="row">
    <div class="col-md-12">
        <div class="img-responsive thumbnail text-center">
            <img src="{{asset('imgs/inner-banner-portfolio2.jpg')}}" alt="Portfolio Image" />
        </div>
    </div>    
</div>
<div class="text-center">
    <h1>Portfolio<h1/>
</div>
@endsection

@section('portfoo')

<div class="row">
        <a href="http://www.assetafrica.co.ke/" target="_blank">
        <div class="col-md-3 col-xs-3 thumbnail img-responsive portfolio-image1">
            <div class="space-x">

            </div>
            <div id="port-text" class="text-left"><p><span>assetafrica</span></p></div>
        </div>
    </a>
    <a href="#" target="_blank">
        <div class="col-md-3 col-xs-3 thumbnail img-responsive portfolio-image2">
                <div class="space-x">

                    </div>
                    <div id="port-text" class="text-left"><p><span>axton</span></p></div>
        </div>
    </a>
    <a href="#" target="_blank">
        <div class="col-md-3 col-xs-3 thumbnail img-responsive portfolio-image3">
                <div class="space-x">

                    </div>
                    <div id="port-text" class="text-left"><p><span>descartes</span></p></div>
        </div>
    </a>
    <a href="#" target="_blank">
        <div class="col-md-3 col-xs-3 thumbnail img-responsive portfolio-image4">
                <div class="space-x">

                    </div>
                    <div id="port-text" class="text-left"><p><span>eden</span></p></div>
        </div>
    </a>
    </div>
    <div class="row">
        <a href="#" target="_blank">
        <div class="col-md-3 col-xs-3 thumbnail img-responsive portfolio-image5">
                <div class="space-x">
                </div>
                <div id="port-text" class="text-left"><p><span>interpolitan</span></p></div>
        </div>
        </a>
        <a href="#" target="_blank">
        <div class="col-md-3 col-xs-3 thumbnail img-responsive portfolio-image6">
                <div class="space-x">

                    </div>
                    <div id="port-text" class="text-left"><p><span>kenyaboy</span></p></div>
        </div>
        </a>
        <a href="#" target="_blank">
        <div class="col-md-3 col-xs-3 thumbnail img-responsive portfolio-image7">
                <div class="space-x">

                    </div>
                    <div id="port-text" class="text-left"><p><span>mishan</span></div>
        </div>
        </a>
        <a href="#" target="_blank">
        <div class="col-md-3 col-xs-3 thumbnail img-responsive portfolio-image8">
                <div class="space-x">

                    </div>
                    <div id="port-text" class="text-left"><p><span>roh</span></p></div>
            </div>
        </div>
    </a>
{{-- bublicate --}}

<div class="row">
        <a href="#" target="_blank">
        <div class="col-md-3 col-xs-3 thumbnail img-responsive portfolio-image9">
            <div class="space-x">

            </div>
            <div id="port-text" class="text-left"><p><span>sabvil</span></p></div>
        </div>
    </a>
    <a href="#" target="_blank">
        <div class="col-md-3 col-xs-3 thumbnail img-responsive portfolio-image10">
                <div class="space-x">

                    </div>
                    <div id="port-text" class="text-left"><p><span>solutech</span></p></div>
        </div>
    </a>
    <a href="#" target="_blank">
        <div class="col-md-3 col-xs-3 thumbnail img-responsive portfolio-image11">
                <div class="space-x">

                    </div>
                    <div id="port-text" class="text-left"><p><span>waterwise</span></p></div>
        </div>
    </a>
    <a href="#" target="_blank">
        <div class="col-md-3 col-xs-3 thumbnail img-responsive portfolio-image12">
                <div class="space-x">

                    </div>
                    <div id="port-text" class="text-left"><p><span>yevon</span></p></div>
        </div>
    </a>
    </div>

    {{-- last row --}}
    {{-- <div class="row">
        <a href="#" target="_blank">
        <div class="col-md-3 thumbnail img-responsive portfolio-image13">
                <div class="space-x">
                    </div>
                    <div id="port-text" class="text-left"><p><span>MIEA</span></p></div>
        </div>
        </a>
        <a href="#" target="_blank">
        <div class="col-md-3 thumbnail img-responsive portfolio-image14">
                <div class="space-x">

                    </div>
                    <div id="port-text" class="text-left"><p><span>Hitachi Sunway</span></p></div>
        </div>
        </a>
        <a href="#" target="_blank">
        <div class="col-md-3 thumbnail img-responsive portfolio-image16">
                <div class="space-x">

                    </div>
                    <div id="port-text" class="text-left"><p><span>Finance Accredation</span></p></div>
        </div>
        </a>
        <a href="#" target="_blank">
        <div class="col-md-3 thumbnail img-responsive portfolio-image16">
                <div class="space-x">

                    </div>
                    <div id="port-text" class="text-left"><p><span>Malysia Major Events</span></p></div>
            </div>
        </div>
    </a> --}}
@endsection
