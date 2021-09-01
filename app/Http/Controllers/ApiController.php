<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use App\Enemi;
use App\Item;
use App\Http\Controllers\BSController;

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

    public function getAllItems()
    {
        $item = Item::all();
        $res =[
            "status" => "ok",
            "message" => "Lista de items",
            "data" => $item
        ];
        return response()->json($res,200);
    }

    public function getItem($id)
    {
        $item = Item::find($id);
        if (isset($item)) {
            $res =[
                "status" => "ok",
                "message" => "Item encontrado",
                "data" => $item
            ];
            
        }else{
            $res =[
                "status" => "error",
                "message" => "Item no encontrado"
            ];
        }
        return response()->json($res,200);
    }

    public function runManualBS($heroId,$enemyId)
    {
        $bs = BSController::runAutoBattle($heroId,$enemyId);
        $res=[
            "status" => "ok",
            "message" => "Sisetma de batalla entre " . $bs["heroName"] . " y " . $bs["enemyName"],
            "data" => $bs
        ];
        return response()->json($res,200);
    }
}
