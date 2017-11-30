<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auto as Auto;

class StockController extends Controller
{
    public function index()
    {
    	$autos = Auto::paginate(10);
    	return view('stock.index', compact('autos'));
    }
}
