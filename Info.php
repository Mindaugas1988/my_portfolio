<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    //
    protected $table = "infos";
    protected $fillable = array('id', 'author','work','happy_clients','hours_of_work','experience','about','mobile','about_en',
    	'about_ru','fb_link','twitter_link','youtube_link','github_link','instagram_link','google_link');
}
