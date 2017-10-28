@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-8 col-sm-offset-2">

    <div class="panel panel-default">
      <div class="panel-heading">
        {{$post->title}}
        <div class="pull-right">
        </div>
      </div>


      <div class="panel-body">
        <p>{{ $post->content }}</p>
        <small>{{$post->category->name}}</small>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-body">
    {{-- Form Comment Start--}}
        <form class="form-horizontal" action="{{ route('blog.comment.store',$post) }}" method="post">
          {{ csrf_field() }}
          <textarea name="message" class="form-control" placeholder="give the comment" rows="5" cols="80">
          </textarea><br>
          <input type="submit" name="send" value="Comment" class="btn btn-primary">
        </form>
      
    
    {{-- Form Comment End--}}


    {{-- Menampilkan komentar Start--}}
    @foreach ($post->comments()->orderBy('created_at','desc')->get() as $comment)
    <div class="panel-body">
      <h4><b>{{ $comment->user->name}} : </b></h4>
      <p>{{ $comment->message }}</p>
      <small><i>{{ $comment->created_at->diffForHumans() }}</i></small>
    </div>
    @endforeach
    {{-- Menampilkan komentar End--}}

    </div>
  </div>
</div>
</div>

@endsection
