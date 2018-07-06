<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'This is the index page!';
        // pass title as an array
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }

    public function portfolio(){
        
        return view('pages.portfolio');
    }

    public function webdesign(){
        return view('pages.web-design');
    }

    public function webmaintenance(){
        return view('pages.web-maintenance');
    }


    public function realestate(){
        return view('pages.real-estate-web-marketing-system');
    }


    public function partner(){
        return view('pages.partner');
    }

    public function icaruspartnership(){
        return view('pages.the-icarus-start-up-partnership-program');
    }


    public function joinicarus(){
        return view('pages.join-icarus-soft');
    }



    public function drupalisation(){
        return view('pages.drupalisation');
    }

    // blog
    public function blog(){
        return view('pages.blog');
    }

    // contact
    public function contact(){
        return view('pages.contact');
    }

    // services
    public function services(){
        return view('pages.services');
    }


}