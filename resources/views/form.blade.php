@extends('layout')
@section('title', 'เขียนบทความ')
@section('content')
 <h2 class="text text-center py-2">เขียนบทความใหม่</h2>
 <form method="POST" action="/insert">
  @csrf
  <div class="form-group">
   <label for="title">Title</label>
   <input type="text" name="title" class="form-control" />
  </div>
  @error('title')
   <div class="my-2">
    <span class="text-danger">{{$message}}</span>
   </div>
  @enderror
  <div class="form-group">
   <label for="content">Content</label>
   <textarea type="content" name="content" cols="30" rows="5" 
    class="form-control" 
   ></textarea>
  </div>
  @error('content')
   <div class="my-2">
    <span class="text-danger">{{$message}}</span>
   </div>
  @enderror
  <input type="submit" value="save" class="btn btn-primary my-4">
  <a href="/blog" class="btn btn-success">บทความทั้งหมด</a>
 </form>
@endsection