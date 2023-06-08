<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
  public function index(){
    // prendo il database dal model Train che è la tabella trains
    // $trains = Train::all();
    $trains = Train::orderBy('orario_partenza')->get();
    return view('home', compact('trains'));
  }
}
