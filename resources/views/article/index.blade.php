@extends('layouts.app')
<a href="{{ route('articles.create') }}">создать статью</a>
@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2><a href="{{ route('articles.show', $article) }}"> {{ $article->name }} </a></h2>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
