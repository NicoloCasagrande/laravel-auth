{{-- @extends('layouts.admin')

@section('page-content')
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>
    <span>{{$post->slug}}</span>
    <a style="display:inline-block" href="{{route('admin.posts.index')}}" class="btn btn-primary my-5">Torna alla Dashboard</a>
@endsection --}}

@extends('layouts.admin')

@section('content')
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>
    <a href="" class="btn btn-warning my-1 d-inline-block">Modifica</a>
    <a href="" class="btn btn-danger my-1">Elimina</a>
    
@endsection