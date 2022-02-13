<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;
use App\Http\Requests\PortfolioRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Portfolio;
use App\Info;
use App\Testimonial;
use App;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang=null)
    {

       App::setLocale($lang);

        //
        $testimonials = Testimonial::orderBy('id', 'desc')->take(12)->get();
        $portfolios = Portfolio::get();
        $skills = Skill::get();
        $info =Info::find(1);

        return view('welcome',compact('portfolios','info','testimonials','skills'));
    }


    public function store(PortfolioRequest $request)
    {
        //

        $portfolio = new Portfolio;

        $url = $request->input('url');
        $title = $request->input('title');
        $portfolio_type = $request->input('portfolio_type');
        $file = $request->file('file');
        $filename = Storage::disk('public')->put('img/portfolio/',$file);

        $portfolio->url = $url;
        $portfolio->title =$title;
        $portfolio->type = $portfolio_type;
        $portfolio->photo = $filename;
        $portfolio->save();

        return redirect('/');

    }



    public function destroy(Request $request)
    {
        //
        if($request->ajax())
        {
          $result = true;
          $id = $request->id;
          $portfolio = Portfolio::find($id);
          $file = $portfolio->photo;
          Storage::disk('public')->delete($file);

          $portfolio->delete();


          return response()->json($result) ;
        }
    }
}
