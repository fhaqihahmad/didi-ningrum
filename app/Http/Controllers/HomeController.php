<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ucapan;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $dear = $request->dear ?? '';

        $ucapan = Ucapan::all();
        return view('home',compact('ucapan','dear'));
    }
}
