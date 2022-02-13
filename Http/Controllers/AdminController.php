<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use App\Portfolio;
use App\Testimonial;

class AdminController extends Controller
{
    //
    public function index(){

    	$info =Info::find(1);
    	$portfolios = Portfolio::all();
    	$testimonials = Testimonial::all();

    	return view('auth/admin',compact('info','portfolios','testimonials'));
    }
}
