@extends('layouts.admin')

@section('page-content')
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>
    <span>{{$post->slug}}</span>
    <a style="display:inline-block" href="{{route('admin.posts.index')}}" class="btn btn-primary my-5">Torna alla Dashboard</a>
@endsection