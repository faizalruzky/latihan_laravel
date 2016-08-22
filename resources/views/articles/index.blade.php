@extends("layouts.application")
<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!--Import bootstrap.css-->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <!--Import Google Icon Font-->
      <!--Import materialize.css-->
      <link href="css/materialize.min.css" rel="stylesheet"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="js/jquery-3.1.0.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/materialize.min.js"></script>
    </head>

@section("content")
 <body>
  <div>{!! link_to('articles/create', 'Write Article', array('class' => 'btn btn-success')) !!}</div>
  @foreach ($articles as $article)

    <table class="table table-bordered table-striped table-hover">
    <thead>
                <tr>
                    <th>No</th><th> Title </th><th> Content </th><th>Images</th><th>Author</th><th>Actions</th>
                </tr>
            </thead>
      <tbody>
       {{-- */$x=0;/* --}}
            @foreach($articles as $article)
                {{-- */$x++;/* --}}
        <tr>
         <td>{{ $x }}</td>
          <td data-field="id">{{$article->title}}</td>
          <td data-field="id">{{$article->content}}</td>
          <td data-field="id">{{$article->image}}</td>
          <td data-field="id">{{$article->author}}</td>
          <td>
       
      <div>
      {!! link_to('articles/'.$article->id, 'Show', array('class' => 'btn btn-info')) !!}
      {!! link_to('articles/'.$article->id.'/edit', 'Edit', array('class' => 'btn btn-warning')) !!}
      {!! Form::open(array('route' => array('articles.destroy', $article->id), 'method' => 'delete')) !!}
        {!! Form::submit('Delete', array('class' => 'btn btn-danger', "onclick" => "return confirm('are you sure?')")) !!}
      {!! Form::close() !!}
      </div>
          </td>
        </tr>
         @endforeach
      </tbody>
    </table>

   <!--  <div>
      <h3>{{$article->title}}</h3>
      <p>{{$article->content}}</p>
      <i>By {{$article->author}}</i>
      <div>
      {!! link_to('articles/'.$article->id, 'Show', array('class' => 'btn btn-info')) !!}
      {!! link_to('articles/'.$article->id.'/edit', 'Edit', array('class' => 'btn btn-warning')) !!}
      {!! Form::open(array('route' => array('articles.destroy', $article->id), 'method' => 'delete')) !!}
        {!! Form::submit('Delete', array('class' => 'btn btn-danger', "onclick" => "return confirm('are you sure?')")) !!}
      {!! Form::close() !!}
      </div>
    </div> -->
<!--   @endforeach -->
   
    </body>
  </html>

@stop