<?php

namespace App\Http\Controllers;
use App\Models\Movieinfo;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class moviecontroller extends Controller 
{
    public function index()
    {
        $data = DB::table('movieinfos')->get();

        $data2= DB::table('movieinfos')
        ->where('movie_name', 'Arrival')
        ->get();


        return view('homepage', ['data' => $data],['cond'=> $data2]);
    }
}
