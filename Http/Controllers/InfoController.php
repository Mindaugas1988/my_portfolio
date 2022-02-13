<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InfoRequest;
use App\Info;

class InfoController extends Controller
{
    //
    public function save(InfoRequest $request){

    $author = $request->input('author');
    $work = $request->input('work');
    $about_lt = $request->input('about_lt');
    $happy_clients = $request->input('happy_clients');
    $hours = $request->input('hours_of_works');
    $experience = $request->input('experience');
    //
    $mobile = $request->input('mobile');
    $about_en = $request->input('about_en');
    $about_ru = $request->input('about_ru');

    //Social
    $fb = $request->input('fb_link');
    $twitter = $request->input('twitter_link');
    $youtube = $request->input('youtube_link');
    $github = $request->input('github_link');
    $instagram = $request->input('instagram_link');
    $google = $request->input('google_link');
    //Social

    $info = Info::updateOrCreate(
    ['id' => 1],
    ['author'=>$author,'work'=>$work,'about'=>$about_lt,'happy_clients'=>$happy_clients, 'hours_of_work'=>$hours,'experience'=>$experience,'mobile'=>$mobile,'about_en'=>$about_en,'about_ru'=>$about_ru,'fb_link'=>$fb,'twitter_link'=>$twitter,
    'youtube_link'=>$youtube,'github_link'=>$github,'instagram_link'=>$instagram,'google_link'=>$google]
    );

      return redirect('/');

    }
}
