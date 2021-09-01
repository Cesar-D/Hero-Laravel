<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use App\Enemi;

class BSController extends Controller
{
    public function index(){
        return view('admin.bs.index',$this->runAutoBattle(5,1));
    }

    public static function runAutoBattle($heroId,$enemyId){
        $hero = Hero::find($heroId)->first();
        $enemy = Enemi::find($enemyId)->first();

        $eventos=[];
        while($hero->hp>0 && $enemy->hp >0){
            $luck = random_int(0,100);
            if ($luck >= $hero->luck) {
                $hp = $enemy->def - $hero->atq;
                if ($hp<0) {
                    $enemy->hp -= $hp * -1;
                }
                if($enemy->hp >0){
                    $ev = [
                        "winner" => "hero",
                        "text" => $hero->name . " hizo un daño de " . $hero->atq . " a " . $enemy->name
                    ];
                } else{
                    $ev = [
                        "winner" => "hero",
                        "text" => $hero->name . " acabo con la vida de " . $enemy->name . "y gano una experiencia de: " . $enemy->xp
                    ];
                    $hero->xp = $hero->xp + $enemy->xp;
                    if ($hero->xp >= $hero->level->xp) {
                        $hero->xp=0;
                        $hero->level_id +=1; 
                    }
                    $hero->save();
                }
            }else{
                $hp = $hero->def - $enemy->atq;
                if ($hp<0) {
                    $hero->hp -= $hp *-1;
                }
                if($hero->hp >0){
                    $ev = [
                        "winner" => "enemy",
                        "text" => $hero->name . " recibio un daño de " . $hero->atq . " por" . $enemy->name
                    ];
                } else{
                    $ev = [
                        "winner" => "enemy",
                        "text" => $hero->name . " fue asesinado por " . $enemy->name
                    ];
                }

            }
            array_push($eventos,$ev);
        }
        return[
            "events" => $eventos,
            "heroName" =>$hero->name,
            "enemyName" =>$enemy->name,
            "heroAvatar" =>$hero->img_path,
            "enemyAvatar" =>$enemy->img_path
        ];
    }

    public function runManualBattle($heroId,$enemyId){
        $hero = Hero::find($heroId)->first();
        $enemy = Enemi::find($enemyId)->first();
        
        $luck = random_int(0,100);
        if ($luch > $hero->luck) {
            $hp = $enemy->def - $hero->atq;
            if ($hp<0) {
                $enemy->hp -= $hp * -1;
            }

            if($enemy->hp >0){
                return [
                    "winner" => "hero",
                    "text" => $hero->name . " hizo un daño de " . $hero->atq . " a " . $enemy->name
                ];
            } else{
                return [
                    "winner" => "hero",
                    "text" => $hero->name . " acabo con la vida de " . $enemy->name . "y gano una experiencia de: " . $enemy->xp
                ];
                $hero->xp = $hero->xp + $enemy->xp;
                if ($hero->xp >= $hero->level->xp) {
                    $hero->xp=0;
                    $hero->level_id +=1; 
                }
                $hero->save();
            }
        } else {
            $hp = $hero->def - $enemy->atq;
            if ($hp<0) {
                $hero->hp -= $hp *-1;
            }
            if($hero->hp >0){
                return [
                    "winner" => "enemy",
                    "text" => $hero->name . " recibio un daño de " . $hero->atq . " por" . $enemy->name
                ];
            } else{
                return [
                    "winner" => "enemy",
                    "text" => $hero->name . " fue asesinado por " . $enemy->name
                ];
            }
        }
        
    }
}
