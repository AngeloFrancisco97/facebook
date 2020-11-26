<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacoes;
use Redirect;

class PublicacoesController extends Controller
{
    public function index(){
        $publicacoes = Publicacoes::query()
                ->join('users', 'users.id', '=', 'publicacoes.idUsuario')
                ->orderBy('publicacoes.id', 'desc')
                ->select('publicacoes.*', 'users.*')->get();
        return view ('inicio', ['publicacoes' => $publicacoes]);
    }
    public function cadastrar_publicacao(Request $request){
        $publicacao = new Publicacoes;
        $publicacao->idUsuario = $request->idUsuario;
        $publicacao->mensagem = $request->mensagem;
        if ($request->hasFile('foto')) {
        $publicacao->foto = $request->foto->store('publicacoes');
        }else{
            $publicacao->foto = '';
        }
        $publicacao->save();
        return Redirect::to('/');
    }
}
