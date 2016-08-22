@extends("layouts.application")
@section("content")
    <h3>Article</h3>
    <a href="{{ url('/articles/create') }}" class="btn btn-primary btn-xs" title="Add New Article"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
    </div>
  <!-- <div>{!! link_to('articles/create', 'Write Article', array('class' => 'btn btn-success')) !!}</div> -->
  <div style="padding-top:5px">
  <div class="table">
    <table class="table table-bordered table-striped table-hover">
      <thead>
                <tr>
                    <th>No</th><th> Title</th><th>Content</th><th>Images</th><th>Author</th><th>Actions</th>
                </tr>
      </thead>
       <tbody>
            {{-- */$x=0;/* --}}
            @foreach($articles as $article)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $article->title }}</td><td>{{ $article->content }}</td><td>{{ $article->image }}</td><td>{{ $article->author }}</td>
                    <td>          
    <div>
      <div>
      {!! link_to('articles/'.$article->id, 'Show', array('class' => 'btn btn-info')) !!}
      {!! link_to('articles/'.$article->id.'/edit', 'Edit', array('class' => 'btn btn-warning')) !!}
      {!! Form::open(array('route' => array('articles.destroy', $article->id), 'method' => 'delete')) !!}
        {!! Form::submit('Delete', array('class' => 'btn btn-danger', "onclick" => "return confirm('are you sure?')")) !!}
      {!! Form::close() !!}
      </div>
    </div>
    </tr>
     @endforeach
    </tbody>
    </table>
    </div>
 
@stop