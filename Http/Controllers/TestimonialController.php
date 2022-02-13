<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TestimonialRequest;
use App\Testimonial;

class TestimonialController extends Controller
{
    //
    public function store(TestimonialRequest $request){

    	 $testimonial = new Testimonial;

    	if ($request->filled('company')) {

    		$testimonial->name = $request->input('name');
    		$testimonial->company = $request->input('company');
    		$testimonial->message = $request->input('message');

         }
         else{

         	$testimonial->name = $request->input('name');
    		$testimonial->message = $request->input('message');

         }

        $testimonial->save();

        return redirect('/');

    }


    public function delete(Request $request){

        if($request->ajax())
        {
          $result = true;
          $id = $request->id;
          $testimonial = Testimonial::find($id);

          $testimonial->delete();

        
          return response()->json($result) ;
        }
    }


      public function delete_all(Request $request){

        if($request->ajax())
        {
          $result = true;
          

         DB::table('testimonials')->truncate();

        
          return response()->json($result) ;
        }
    }
}
