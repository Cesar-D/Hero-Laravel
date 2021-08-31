<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enemi;
class EnemyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enemys=Enemi::all();
        return view('admin.enemys.index', ['enemys' => $enemys]);
        return view('admin.enemys.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.enemys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->saveEnemy($request,null);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enemy = Enemi::find($id);
        return view('admin.enemys.edit',['enemy' => $enemy]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->saveEnemy($request,$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enemy = Enemi::find($id);
        $enemy->delete();
        return redirect()->route('enemy.index');
    }

    public function saveEnemy(Request $request,$id){
        if($id){
            $enemy = Enemi::find($id);
        } else{
            $enemy = new Enemi();
        }
        
        $enemy->name=$request->input('name');
        $enemy->hp=$request->input('hp');
        $enemy->atq=$request->input('atq');
        $enemy->def=$request->input('def');
        $enemy->coins=$request->input('coins');
        $enemy->xp=$request->input('xp');
        
        if ($request->hasFile('img_path')) {
            $file = $request->file('img_path');
            $name = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path() . '/images/', $name);
            $enemy->img_path = $name;
        }


        if(!$enemy->save()){
            echo "error";
        }else{
            return redirect()->route('enemy.index');
        }
    }
}
