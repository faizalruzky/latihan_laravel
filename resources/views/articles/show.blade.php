@extends("layouts.application")
@section("content")
  <div>
    <img class="materialboxed" src="{{ asset('/uploads/images/'. $article->id . '/resize-' . $article->image) }}">
    <h3>{!! $article->title !!}</h3>
    <p>{!! $article->content!!}</p>
    <i>By {!! $article->author !!}</i>
  </div>
<script type="text/javascript">
	$(document).ready(function(){
    $('.materialboxed').materialbox();
  });
</script>
<div>
  <h3><i><u>Give Comments</u></i></h3>
  {!! Form::open(array('url' => 'comments', 'class' => 'form-horizontal', 'role' => 'form')) !!}
    <div class="row">
    <div class="form-group ">
    <div class="col s9 offset-s3">
      {!! Form::label('article_id', 'Title', array('class' => 'control-label')) !!}
    {!! Form::text('article_id', $value = $article->id, array('class' => 'form-control', 'readonly')) !!}
      </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="row">
    <div class="form-group">
    <div class="col s9 offset-s3"> 
      {!! Form::label('content', 'Content', array('class' => 'control-label')) !!}
      </div>
      <div class="col s9 offset-s3">
      {!! Form::textarea('content', null, array('class' => 'form-control', 'rows' => 10, 'autofocus' => 'true')) !!}
        {!! $errors->first('content') !!}
      <div class="clear"></div>
    </div>
    
    <div calss="row">
     <div class="col s9 offset-s3"> 
    <div class="form-group">
      {!! Form::label('user', 'User', array('class' => 'col-lg-3 control-label')) !!}
      <div class="col-lg-9">
        {!! Form::text('user', null, array('class' => 'form-control')) !!}
      </div>
    </div>
    </div>

      <div class="clear"></div>
    </div>
    <div class="row">
    <div class="form-group">
      <div class="col-lg-3"></div>
       <div class="col s9 offset-s3">
        {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
      </div>
      <div class="clear"></div>
    </div>
    </div>
  {!! Form::close() !!}
  </div>

  @foreach($comments as $comment)
  <div style="padding-top:30px" class="col s9 offset-s3">
    <div style="outline: 1px solid #74AD1B;">
      <p>{!! $comment->content !!}</p>
      <i>{!! $comment->user !!}</i>
    </div>
    </div>

  @endforeach

@endsection