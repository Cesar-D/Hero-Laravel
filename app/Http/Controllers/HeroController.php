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
       return $this->saveHero($request,null);
    }

    public function update(Request $request,$id){
        return $this->saveHero($request,$id);
    }

    public function saveHero(Request $request,$id){
        if($id){
            $hero = Hero::find($id);
        } else{
            $hero = new Hero();
            $hero->xp=0;
            $hero->level_id=1;
        }
        
        $hero->name=$request->input('name');
        $hero->hp=$request->input('hp');
        $hero->atq=$request->input('atq');
        $hero->def=$request->input('def');
        $hero->luck=$request->input('luck');
        $hero->coins=$request->input('coins');

        if ($request->hasFile('img_path')) {
            $file = $request->file('img_path');
            $name = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path() . '/images/heroes', $name);
            $hero->img_path = $name;
        }

        if(!$hero->save()){
            echo "error";
        }else{
            return redirect()->route('heroes.index');
        }
    }

    public function edit($id){
        $heroes = Hero::find($id);
        return view('admin.heroes.edit',['heroes' => $heroes]);
    }

    public function destroy($id){
        $hero = Hero::find($id);
        $filePath = public_path() . '/images/heroes/' . $hero->img_path;
        \File::delete($filePath);
        $hero->delete();
        return redirect()->route('heroes.index');
    }

    
}
