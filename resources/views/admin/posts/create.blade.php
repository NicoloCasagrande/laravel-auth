@extends('layouts.admin')

@section('content')
    <h1>Crea Post</h1>
    <div>
        <form action="{{route('admin.posts.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" value="{{old('title')}}">
              </div>
              <div class="mb-3">
                <label for="content" class="form-label">Descrizione</label>
                <textarea class="form-control" id="content" name="content" rows="3" placeholder="Inserisci la descrizione del progetto" value="{{old('content')}}></textarea>
              </div>
              <button type="submit" class="btn btn-success">Conferma</button>
        </form>
    </div>
    <a href="{{route('admin.posts.index')}}" class="btn btn-primary my-1">Torna alla Lista</a>
    
@endsection