@extends("layouts.application")
@section("content")
  <header id="header" class="container">
    <h1>Articles</h1>
    <a href="{{ url('/articles/create') }}"><button  class="btn btn-primary btn-xs" title="Add New Article"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></button></a>
    </header>
  
  
  
  <!-- Posts -->
  @foreach($articles as $article)
     <div class="row">
        <div class="col s4 m4">
          <div class="card small">
            <div class="card-image">
               <img src="{{ asset('/uploads/images/'. $article->id . '/' . $article->image) }} " class="img-responsive">
              		<span class="card-title">{{($article->title)}} </span>
            </div>
            <div class="card-content">
              <p>{{($article->content)}}</p>
            </div>
            <div class="card-action">
              <a href="{{url('articles/'.$article->id)}}">Read more</a>
               <a href="{{ url('articles/'.$article->id. '/edit') }}"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></button></a> 
                <a href="{{ url('articles/'.$article->id. '/delete') }}" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger"> <span class="glyphicon glyphicon-trash"> </span></button></a>  
            </div>
          </div>
        </div>
        @endforeach
    </div>
@stop