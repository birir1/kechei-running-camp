<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index(){
        return view("frontend.index");
    }

    public function about(){
        return view("frontend.about");
    }
    public function accomodation(){
        return view("frontend.accomodation");
    }
    public function amenities(){
        return view("frontend.amenities");
    }
    public function contacts(){
        return view("frontend.contacts");
    }
    public function endurance(){
        return view("frontend.endurance");
    }
    public function FAQs(){
        return view("frontend.FAQs");
    }
    public function flexibility(){
        return view("frontend.flexibility");
    }
    public function history(){
        return view("frontend.history");
    }
    public function ourathletes(){
        return view("frontend.ourathletes");
    }
    public function profiles(){
        return view("frontend.profiles");
    }
    public function rooms(){
        return view("frontend.rooms");
    }
    public function strength(){
        return view("frontend.strength");
    }
    public function training(){
        return view("frontend.training");
    }
    public function campsoverview(){
        return view("frontend.campsoverview");
    }
}