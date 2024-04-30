<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Result;
use App\Models\State;
use App\Models\Region;
use App\Models\Store;
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


    public function cities() {
        // $stores = Store::first();

        // $cities = City::with('stores')->find(3);

        // $cities->stores()->sync([2, 4]);

        // dd($cities);

        $cities = City::with('stores')->get();

        return view('cities', compact('cities'));
    }

    public function stores() {

        $stores = Store::with('cities')->get();

        return view('stores', compact('stores'));
    }

}
