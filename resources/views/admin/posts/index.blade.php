@extends('layouts.admin')

@section('content')
    <h1>Lista Posts</h1>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
          <tr>
            <th scope="row"></th>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td>{{$post->slug}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    
@endsection