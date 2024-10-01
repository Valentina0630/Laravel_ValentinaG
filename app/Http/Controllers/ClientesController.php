<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public function index()
    {
       
    }


    public function store(Request $request)
    {
       
    }

    public function show(string $id)
    {
        
    }


    public function update(Request $request, string $id)
    {
       
    }

   
    public function destroy(string $id)
    {
       
    }

    public function control()
    {
        $clients = [ 
            [ 'id' => 0 , 'name' => 'Emmett', 'last_name' => 'Brown', 'email' => 'emmett@domain.com' ] ,
            [ 'id' => 1 , 'name' => 'Jennifer', 'last_name' => 'Parker', 'email' => 'jennifer@domain.com' ] ,
        ];
          return view('index',  ['clientes'=>$clients]);
    }

     public function cedula($id)
     {
          return view('details');
      } 

    
}
