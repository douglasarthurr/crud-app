<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $orders = [
            [
            'codigo_pedido'               => 925678,
            'cliente'                   => 'Fulano',
            'produto'                   => "Honda civic Bi-turbo",
            'quantidade'                => 1,
            'valor_pedido'              => 100000.00,
            'valor_desconto'            => 1000, 
            ]
            ,
            [
                'codigo_pedido'               => 784567,
                'cliente'                   => 'Fulana',
                'produto'                   => "Toyota Hilux",
                'quantidade'                => 1,
                'valor_pedido'              => 400000.00,
                'valor_desconto'            => 6000, 
                ]
        ];

        $orderList = array_column($orders, 'codigo_pedido');

       
        return view('Pedido', compact('orders', 'orderList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

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
