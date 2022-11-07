<?php

namespace App\Http\Controllers;

use App\Models\FacilityActivity;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function getFA(Request $request){
        return FacilityActivity::where('id',$request['q'])->get();
    }
}
