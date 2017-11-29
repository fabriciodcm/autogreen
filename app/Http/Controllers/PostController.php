<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //
    public function index(){
        echo json_encode(Post::all());
    }
    public function show($id){
        echo json_encode(Post::find($id));
    }

    public function store(Request $request){
        $post = new Post();
        $post->idUser = $request->input('idUser');
        $post->noticia = $request->input('noticia');
        $post->manchete = $request->input('manchete');
        $post->urlImagem = $request->input('urlImagem');
        $post->urlVideo = $request->input('urlVideo');
        $post->urlFonte = $request->input('urlFonte');
        $post->palavraChave = $request->input('palavraChave');
        $post->save();
        return view('home');
    }

    public function welcome(){
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('welcome', compact('posts'));
    }
}

