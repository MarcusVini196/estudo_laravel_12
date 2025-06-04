<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\ProdutoDataTable;
use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;


class ProdutoController extends Controller
{
    use UploadImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(ProdutoDataTable $dataTable)
    {
        return $dataTable->render('admin.produtos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produtos.adicionar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'imagem_principal'=> ['required', 'image', 'max:2048'],
            'nome' => ['required', 'string', 'max:255'],
            'descricao' => ['required', 'string'],
            'preco' => ['required', 'numeric'],
            'quantidade' => ['required', 'integer'],
        ]);

        $produtoImage = $this->uploadImage($request, 'imagem_principal', 'uploads');
        $produto = new Produto();
        $produto->imagem_principal = $produtoImage;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->quantidade = $request->quantidade;
        $produto->save();

        return redirect()->back()->with('success', 'Produto adicionado com sucesso!');
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
        //
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
