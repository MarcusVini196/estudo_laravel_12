<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\CategoriaDataTable;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategoriaDataTable $dataTable)
    {
        return $dataTable->render('admin.categorias.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categorias.criar-categoria');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nome' => ['required', 'max:200', 'unique:categorias,nome'],
        'descricao' => ['nullable', 'max:500'],
        'status' => ['required']
        ]);

        $categoria = new Categoria();

        $categoria->nome = $request->nome;
        $categoria->descricao = $request->descricao;
        $categoria->status = $request->status;
        $categoria->slug = Str::slug($request->nome);

        return redirect()->back()->with('success', 'Categoria criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('admin.categorias.editar', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
