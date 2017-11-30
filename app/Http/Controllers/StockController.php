<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auto as Auto;

class StockController extends Controller
{
    public function index()
    {
    	$autos = Auto::all();
    	return view('stock.index', compact('autos'));
    }
}
