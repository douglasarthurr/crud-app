<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = [
            ['id'           => 1,
            'nome_produto'  => 'Camisa',
            'valor_venda'   => 33.30,
            'categoria'     => 'Vestuario',
            'marca'         => 'Nike',
            'qtd_estoque'   => 200 ]
            ,
            ['id'           => 2,
            'nome_produto'  => 'Calça',
            'valor_venda'   => 50.30,
            'categoria'     => 'Vestuario',
            'marca'         => 'Adidas',
            'qtd_estoque'   => 200 ]
        ];

        $productList = array_column($products, 'nome_produto');

        return view('ListaProdutos', compact('products', 'productList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
