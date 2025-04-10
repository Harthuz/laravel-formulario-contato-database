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

Route::get('/listar-contato/{id}', function ($id) {
    $contato = Contato::find($id);
    return view('listar-contato', ['contato' => $contato]);
});

Route::get('/editar-contato/{id}', function ($id) {
    $contato = Contato::find($id);
    if ($contato) {
        \Log::info("Contato encontrado: ", $contato->toArray()); // Log dos dados do contato
    } else {
        \Log::warning("Contato com ID {$id} não encontrado."); // Log caso o contato não seja encontrado
    }
    return view('editar-contato', ['contato' => $contato]);
});

Route::post('/editar-contato/{id}', function (Request $request, $id) {
    $contato = Contato::find($id);
    $contato->update([
        'nome' => $request->nome,
        'telefone' => $request->telefone,
        'origem' => $request->origem,
        'observacoes' => $request->observacoes,
    ]);
    echo "Contato editado com sucesso!";
});