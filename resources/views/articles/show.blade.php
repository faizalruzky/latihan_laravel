@extends("layouts.application")
@section("content")
  <div>
    <h3>{!! $article->title !!}</h3>
    <p>{!! $article->content!!}</p>
    <i>By {!! $article->author !!}</i>
  </div>
@stop