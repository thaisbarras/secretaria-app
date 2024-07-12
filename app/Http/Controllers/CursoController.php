<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCursoRequest;
use App\Models\Curso;
use App\Models\Departamento;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        $dptos = Departamento::pluck('nome', 'id');
        return inertia('Curso/Curso', compact('cursos', 'dptos'));
    }

    public function create()
    {
        $dptos = Departamento::pluck('nome', 'id');
        return inertia('Curso/Create', compact('dptos'));
    }

    public function store(StoreCursoRequest $request)
    {
        Curso::create($request->validated());
        return redirect()->route('curso')->with('message',"Curso criado com sucesso");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Curso $curso)
    {
        $dptos = Departamento::pluck('nome', 'id');
        return inertia('Curso/Edit', compact('curso', 'dptos'));
    }

    public function update(Request $request, Curso $curso)
    {
        $curso->update($request->all());

        return redirect()->route('curso')->with('message', 'Curso editado com sucesso');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('curso')->with('message', 'Curso excluído com sucesso!');
    }
}
