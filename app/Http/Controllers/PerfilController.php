<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Amigos;
use App\Models\User;
use Redirect;

class PerfilController extends Controller
{

    public function index(){
        $id = Auth::id();

        $usuarios = User::query()
                ->leftJoin('amigos', function ($join) {
                    $join->on('amigos.idDeQuem', '=', 'users.id')->orOn('amigos.idParaQuem', '=', 'users.id');
                })
                ->where('users.id','!=', 'amigos.idDeQuem')
                ->select('users.*', 'amigos.idDeQuem', 'amigos.idParaQuem')->orderBy('id')->get();
        return view('perfil', ['usuarios' => $usuarios], ['id'=>$id]);
    }
    
    public function adicionar_amigo(Request $request){
        dd($amigo = new Amigos(),
        $amigo->idDeQuem = $request->idDeQuem,
        $amigo->idParaQuem = $request->idParaQuem,
        $amigo->save());
        return Redirect::to('/perfil');
                
    }
    
    public function editar_perfil(Request $request){
        $editarPerfil = User::find($request->id);
        
        $editarPerfil->name = $request->nome;
        if ($request->hasFile('fotoPerfil')) {
        $editarPerfil->fotoPerfil = $request->fotoPerfil->store('perfil');
        }
        if ($request->hasFile('fotoCapa')) {
        $editarPerfil->fotoCapa = $request->fotoCapa->store('capa');
        }
        $editarPerfil->save();
        return Redirect::to('/perfil');
                
    }
}
