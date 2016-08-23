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
@endsection