<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensagem;

class MensagemController extends Controller
{
    public function index(){
        echo json_encode(Mensagem::limit(10)->get());
    }

    public function store(Request $request){
        $mens = new Mensagem();
        $mens->mensagem = $request->input('mensagem');
        $mens->id_user = $request->input('id_user');
        $mens->save();
        echo json_encode(Mensagem::limit(10)->get());
    }
    
}
