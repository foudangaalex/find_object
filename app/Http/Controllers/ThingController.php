<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThingController extends Controller
{
    public function index(){
        $things=DB::table('Things')->paginate(5);
        return view('welcome',['things'=>$things]);
    }

    
    public function create(){
        return view('objects');
    }
}
