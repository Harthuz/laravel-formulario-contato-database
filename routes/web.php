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
        'telefone' => $request->telefone,
        'origem' => $request->origem,
        'observacoes' => $request->observacoes,
    ]);
    echo "Contato criado com sucesso!";
});

Route::get('/listar-contatos/{id}', function ($id) {
    $contatos = Contato::find($id);
    return view('listar-contatos', ['contato' => $contatos]);
});