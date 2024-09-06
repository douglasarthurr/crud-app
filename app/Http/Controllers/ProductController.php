<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderby('created_at', 'desc') -> get();
        return view('ListarProdutos')
                -> with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CadastrarProduto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nome_produto'      => 'required',
            'marca'             => 'required',
            'categoria'         => 'required',
            'valor_compra'      => 'required|numeric',
            'valor_venda'       => 'required|numeric',
            'qtd_estoque'       => 'required|integer',
            
        ]);

        Product::create($request -> all());

        return redirect('/produtos') -> with('sucess', 'Produto Criado com sucesso👌');

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
