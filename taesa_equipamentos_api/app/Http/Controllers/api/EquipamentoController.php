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
    public function index()
    {
        return Equipamento::all();
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
        //return $id;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $equipamento=Equipamento::findOrFail($id);
        $equipamento->update($request->all());
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
