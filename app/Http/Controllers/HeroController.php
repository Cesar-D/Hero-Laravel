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

    public function create(){
        return view('admin.heroes.create');
    }

    public function store(Request $request){
        $hero = new Hero();
        $hero->name=$request->input('name');
        $hero->hp=$request->input('hp');
        $hero->atq=$request->input('atq');
        $hero->def=$request->input('def');
        $hero->luck=$request->input('luck');
        $hero->coins=$request->input('coins');
        $hero->xp=0;
        $hero->level_id=1;

        if(!$hero->save()){
            echo "error al crear hero";
        }else{
            return redirect()->route('admin.heroes');
        }
    }
}
