<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribe_Service;
class PickupController extends Controller
{
    function getAllPickups(){
        return Subscribe_Service::all();
    }

    function deletePickup(Request $request) {
        return Subscribe_Service::where('ID',$request->ID)->delete();
    } 
}
