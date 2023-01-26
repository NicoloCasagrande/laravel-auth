@extends('layouts.admin')

@section('content')
    <h1>Lista Posts</h1>

    @if(session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
    @endif
    <div class="my-4">
      <a href="{{route('admin.posts.create')}}" class="btn btn-primary">Crea un nuovo Post</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione Progetto</th>
            <th scope="col">Slug</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
          <tr>
            <th scope="row"></th>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td>{{$post->slug}}</td>
            <td>
              <a href="{{route('admin.posts.show', $post)}}" class="btn btn-primary my-1">Info</a>
              <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-warning my-1">Modifica</a>
              <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
              @csrf
              @method('DELETE')
                <button class="btn btn-danger my-1">Elimina</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    
@endsection