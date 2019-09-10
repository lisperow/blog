@extends('layouts.app')

@section('content')
  <h1>Список статей</h1>
  <div>
    <table>
      <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
        </tr>
      </thead>
      <tbody>
        @foreach($articles as $article)
          <tr>
            <td>{{$article->id}}</td>
            <td>
              <a href="articles/{{$article->id}}">{{$article->name}}</a>
              <a href="articles/{{$article->id}}/edit">Edit</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    {{$articles->links()}}
    <div>
@endsection
