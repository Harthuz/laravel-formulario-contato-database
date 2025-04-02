<?php

use Illuminate\Support\Facades\Route;
use App\Models\Contato;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('formulario');
});

Route::post('/cadastrar-contato',function(Request $request){
    //dd($request->all());
    Contato::create([
        'nome' => $request->nome,
        'email' => $request->email,
        'telefone' => $request->telefone,
        'mensagem' => $request->mensagem,
    ]);
    echo "Contato criado com sucesso!";
});