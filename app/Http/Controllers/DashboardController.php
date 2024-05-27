<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\News;
use App\Models\Notice;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function getData(){
        $project=Project::where('status','=',1)->count();
        $news = News::where('status','=',1)->count();
        $noc=Notice::where('status','=',1)->count();
        $career = Career::where('status','=',1)->count();

        return view('dashboard')->with('project', $project)->with('news', $news)->with('noc', $noc)->with('career', $career);
    }
}