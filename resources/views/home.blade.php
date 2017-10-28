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
              <p>{{ str_limit($post->content)}}</p>
              <i>{{$post->created_at->diffForHumans() }}</i>
            </div>
          </div>
        @endforeach
        {!! $posts->render() !!}
      </div>
    </div>
  </div>
@endsection
