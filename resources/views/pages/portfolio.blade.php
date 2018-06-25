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

@section('portfoo')

<div class="row">
        <a href="#">
        <div class="col-md-3 thumbnail img-responsive portfolio-image">
            <div class="space-x">

            </div>
            <div id="port-text"><p><span>FAM</span></p></div>
        </div>
    </a>
    <a href="#">
        <div class="col-md-3 thumbnail img-responsive portfolio-image">
                <div class="space-x">

                    </div>
                    <div id="port-text"><p><span>investSmartSc</span></p></div>
        </div>
    </a>
    <a href="#">
        <div class="col-md-3 thumbnail img-responsive portfolio-image">
                <div class="space-x">

                    </div>
                    <div id="port-text"><p><span>Scicom</span></p></div>
        </div>
    </a>
    <a href="#">
        <div class="col-md-3 thumbnail img-responsive portfolio-image">
                <div class="space-x">

                    </div>
                    <div id="port-text"><p><span>V integrated wellness</span></p></div>
        </div>
    </a>
    </div>
    <div class="row">
        <a href="#">
        <div class="col-md-3 thumbnail img-responsive portfolio-image">
                <div class="space-x">
                    </div>
                    <div id="port-text"><p><span>MIEA</span></p></div>
        </div>
        </a>
        <a href="#">
        <div class="col-md-3 thumbnail img-responsive portfolio-image">
                <div class="space-x">

                    </div>
                    <div id="port-text"><p><span>Hitachi Sunway</span></p></div>
        </div>
        </a>
        <a href="#">
        <div class="col-md-3 thumbnail img-responsive portfolio-image">
                <div class="space-x">

                    </div>
                    <div id="port-text"><p><span>Finance Accredation Agency</span></p></div>
        </div>
        </a>
        <a href="#">
        <div class="col-md-3 thumbnail img-responsive portfolio-image">
                <div class="space-x">

                    </div>
                    <div id="port-text"><p><span>Malysia Major Events</span></p></div>
            </div>
        </div>
        </a

@endsection
