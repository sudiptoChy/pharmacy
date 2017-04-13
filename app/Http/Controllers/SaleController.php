<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class SaleController extends Controller
{
    public function index()
    {
    	
        //Session:: flash('success', 'Company Created Successfully!');
    	return view('newsale');
    }
}
