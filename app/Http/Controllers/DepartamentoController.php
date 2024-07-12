<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDepartamentoRequest;
use App\Http\Requests\UpdateDepartamentoRequest;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    public function index()
    {
        $dptos = Departamento::all();

        return inertia('Departamento/Departamento', compact('dptos'));
    }

    public function create()
    {
        return inertia('Departamento/Create');
    }

    public function store(StoreDepartamentoRequest $request)
    {
        Departamento::create($request->validated());   

        return redirect()->route('departamento')->with('message',"Departamento criado com sucesso");
    }

    public function show(Departamento $departamento)
    {
        //
    }

    public function edit(Departamento $dpto)
    {
        return inertia('Departamento/Edit', compact('dpto'));
    }

    public function update(Departamento $dpto , UpdateDepartamentoRequest $request)
    {
        $dpto->update($request->all());

        return redirect()->route('departamento')->with('message', 'Departamento editado com sucesso');
    }

    public function destroy(Departamento $dpto)
    {
        $dpto->delete();

        return redirect()->route('departamento')->with('message', 'Departamento excluído com sucesso!');
    }
}
