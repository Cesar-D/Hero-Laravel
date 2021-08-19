<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;

class HeroController extends Controller
{
    public function index(){
        $heros = Hero::all();
        return view('admin.heroes.index',['heros'=>$heros]);
    }
}
