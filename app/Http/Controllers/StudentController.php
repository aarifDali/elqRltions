<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Result;
use App\Models\State;
use App\Models\Region;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        $result = Result::find(5);
        dd($result->student->name, $result->marks);
        
    }


    public function map() {
        $countries = Country::all();
        return view('countries', compact('countries'));
        
    }

    public function states() {
        $states = State::all();

        return view('states', compact('states'));
    }


    public function regions() {
        $regions = Region::all();

        return view('regions', compact('regions'));
    }

}
