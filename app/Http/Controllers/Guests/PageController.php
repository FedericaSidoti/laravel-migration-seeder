<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        
        $trains= Train::where('departure_time','>','2023-12-13')->get();
        return view('index', compact('trains'));
    }
}
