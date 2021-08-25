<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use App\Item;
use App\Enemi;

class AdminController extends Controller
{
    public function index(){
        $heroCounter= Hero::count();
        $itemCounter= Item::count();
        $enemyCounter= Enemi::count();

        $report= [
            ['name' => "Heroes",'counter'=>$heroCounter,'route'=>'heroes.index'],
            ['name' => "Items",'counter'=>$itemCounter,'route'=>'item.index'],
            ['name' => "Enemigos",'counter'=>$enemyCounter,'route'=>'enemy.index']
        ];

        return view('admin.index',['report'=>$report]);
    }
}
