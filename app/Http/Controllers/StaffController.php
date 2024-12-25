<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('staff.dashboard');
    }

   public function showMenageLocation(){
    return view('staff.menage-location');
   }
}
