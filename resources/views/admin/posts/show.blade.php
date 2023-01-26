@extends('layouts.admin')

@section('content')
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>
    <div>
        <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-warning my-1 d-inline-block">Modifica</a>
        <a href="#" class="btn btn-danger my-1">Elimina</a>
    </div>
    <a href="{{route('admin.posts.index')}}" class="btn btn-primary my-1">Torna alla Lista</a>
    
@endsection