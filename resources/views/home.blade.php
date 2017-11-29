@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="{{ url('/posts') }}" method="POST">
                <div class="form-group">
                    <label for="manchete">Título</label>
                    <input type="text" class="form-control" id="manchete"  name="manchete" placeholder="Carros do futuro">
                </div>
                <div class="form-group">
                    <label for="noticia">Notícia</label>
                    <textarea rows="5" class="form-control" id="noticia" name="noticia" placeholder="Carros voadors!!!"></textarea>
                </div>
                <div class="form-group">
                    <label for="urlImagem">URL Imagem</label>
                    <input type="text" class="form-control" id="urlImagem"  name="urlImagem" placeholder="http://autogreen.com/imagem.png">
                </div>
                <div class="form-group">
                    <label for="urlVideo">URL Video</label>
                    <input type="text" class="form-control" id="urlVideo"  name="urlVideo" placeholder="http://youtube.com/autogreen">
                </div>
                <div class="form-group">
                    <label for="urlFonte">URL Fonte</label>
                    <input type="text" class="form-control" id="urlFonte"  name="urlFonte" placeholder="http://wikipedia.com/autogreen">
                </div>
                <div class="form-group">
                    <label for="palavraChave">Palavras Chave</label>
                    <input type="text" class="form-control" id="palavraChave"  name="palavraChave" placeholder="Carros Futuro">
                </div>
                <input type="hidden" name="idUser" value="{{Auth::user()->id}}"/>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                
            </form>
        </div>
    </div>
</div>
@endsection
