<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    public function store(Request $request){
        $business = new Business;
        $business->name = $request->name;
        $business->description = $request->description;
        return $business->save();
    }

    public function destroy(Business $business){
        return $business->delete();
    }
}
