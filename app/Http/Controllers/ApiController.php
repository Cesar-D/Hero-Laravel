<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;

class ApiController extends Controller
{
    public function index(){
        $res=[
            'status' => 'ok',
            'message' => 'La Api funciona corresctamente',
        ];
        return response()->json($res,200);
    }

    public function getAllHeroes()
    {
        $heroes = Hero::all();
        $res = [
            "status" => "ok",
            "menssage" => "Lista de heroes",
            "data" => $heroes
        ];
        return response()->json($res,200);
    }

    public function getHero($id)
    {
        $hero = Hero::find($id);
        if (isset($hero)) {
            $res =[
                "status" => "ok",
                "message" => "Obtener heroe",
                "data" => $hero
            ];
            
        }else{
            $res =[
                "status" => "error",
                "message" => "Hero no encontrado"
            ];
        }
        return response()->json($res,200);
    }
}
