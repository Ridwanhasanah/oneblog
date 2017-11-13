@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      @foreach ($posts as $post)
      <div class="panel panel-default">
        <div class="panel-heading">
          <a href="{{route('blog.singlepost',$post->id)}}">{{$post->title}}</a>
        </div>

        <div class="panel-body">

          <div class="col-md-3">
            <img width="150" height="100" src="flower.jpg">
          </div>
          <div class="col-md-6">

            <p>{{ str_limit($post->content)}}</p>
            <small><i>{{$post->created_at->diffForHumans() }}</i></small>    
          </div>
          
        </div>

      </div>
      @endforeach
      {!! $posts->render() !!}
    </div>
  </div>
</div>
@endsection
