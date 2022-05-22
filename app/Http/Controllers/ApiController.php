<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    //
    public function getAllClients() {
        $clients = Cliente::get()->toJson(JSON_PRETTY_PRINT);
        return response($clients, 200);
    }

    public function getClient(Request $request) {
      

    if(DB::table('clientes')->where('cpf', '=', $request->cpf)->exists()){

        $client = DB::table('clientes')
                ->where('cpf', '=', $request->cpf)
                ->get()->toJson(JSON_PRETTY_PRINT);
        return response($client, 200);

    }else{

        return response()->json([
            "message" => "Cliente não encontrado..."
        ], 404);
    
    }


    }
}
