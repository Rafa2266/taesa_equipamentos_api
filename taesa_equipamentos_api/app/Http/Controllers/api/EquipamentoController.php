<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipamento;

class EquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    { 
        $equipamentos;
        if($request['fabFilter']){
            $equipamentos=Equipamento::where('fab','like','%'.$request['fabFilter'].'%');
        }else{
            $equipamentos=Equipamento::where('fab','like','%%');
        }

        if($request['tipoFilter']){
            $equipamentos->where('tipo','like','%'.$request['tipoFilter'].'%');
        }else{
            $equipamentos->where('tipo','like','%%');
        }
        if(!$request['order']){
            $equipamentos->reorder('id', 'asc');
        }else{
            $equipamentos->reorder($request['order'], 'asc');
        }     
        $equipamentos->offset($request['offset']);
        $equipamentos->limit(5);  
        return $equipamentos->get();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Equipamento::create($request->all());
        return $request;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return Equipamento::findOrFail($id);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $equipamento=Equipamento::findOrFail($id);
        $equipamento->update($request->all());
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $equipamento=Equipamento::findOrFail($id);
        $equipamento->delete();
    }
}
