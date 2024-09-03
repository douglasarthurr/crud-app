<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clients = [
            ['id'               => 1,
            'nome'              => 'Fulano',
            'cpf'               => "000.000.000-00",
            'rg'                => '0.000.000',
            'sexo'              => 'M',
            'data_nascimento'   => '08/31/1988' ,
            'celular'           => '+556999999999',
            'email'             => 'emaildofulano@acaba.pelo.amor.de.deus.com' 
            ]
            ,
            ['id'               => 2,
            'nome'              => 'Fulana Mulher do Fulano',
            'cpf'               => "111.111.111-11",
            'rg'                => '1.111.111',
            'sexo'              => 'F',
            'data_nascimento'   => '10/25/1990' ,
            'celular'           => '+556988888888',
            'email'             => 'emaildafulana@acaba.pelo.amor.de.deus.com' 
            ]
            ,
            ['id'               => 3,
            'nome'              => 'Fulaninho filho dos fulanos',
            'cpf'               => "222.222.222-22",
            'rg'                => '2.222.222',
            'sexo'              => 'M',
            'data_nascimento'   => '02/10/2008' ,
            'celular'           => '+556977777777',
            'email'             => 'fulanofilho@acaba.pelo.amor.de.deus.com' 
            ]
            ,
            ['id'               => 4,
            'nome'              => 'Fulaninha filha dos fulanos',
            'cpf'               => "333.333.333-33",
            'rg'                => '3.333.333',
            'sexo'              => 'F',
            'data_nascimento'   => '01/16/2015' ,
            'celular'           => '+556966666666',
            'email'             => 'fulanafilha@acaba.pelo.amor.de.deus.com' 
            ]
        ];

        $clientList = array_column($clients, 'nome');

       
        return view('Cliente', compact('clients', 'clientList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('Cliente');
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
