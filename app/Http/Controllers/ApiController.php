<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use App\Enemi;

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
                "message" => "Heroe obtenido",
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

    public function getAllEnemy()
    {
        $enemy = Enemi::all();
        $res =[
            "status" => "ok",
            "message" => "Lista de enemigos",
            "data" => $enemy
        ];
        return response()->json($res,200);
    }

    public function getEnemy($id)
    {
        $enemy = Enemi::find($id);
        if (isset($enemy)) {
            $res =[
                "status" => "ok",
                "message" => "Enemigo encontrado",
                "data" => $enemy
            ];
            
        }else{
            $res =[
                "status" => "error",
                "message" => "Enemigo no encontrado"
            ];
        }
        return response()->json($res,200);
    }
}
