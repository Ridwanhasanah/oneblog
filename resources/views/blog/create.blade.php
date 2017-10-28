@extends('layouts.app')

@section('content')
  <div class="container">
    <form class="" action="{{ route('blog.create')}}" method="post">
      {{ csrf_field() }}
      <div class="form-group ">
        <label for="">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Post Title" value="{{ old('title') }}">
      </div>
      <div class="form-group">
        <label for="">Category</label>
        <select class="form-control" name="category_id">
          @foreach ($categories as $category)
            <option name="category_id" value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
          <label for="">Content</label>
          <textarea class="form-control" name="content" rows="5" cols="80">{{ old('content')}}</textarea>
      </div>
      <div class="form-group">
        <input type="submit" name="" class="btn btn-primary" value="Save">
      </div>
    </form>

  </div>
@endsection()
