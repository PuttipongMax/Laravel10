@extends('layout')
@section('title', 'บทความทั้งหมด')
@section('content')
  <h2>บทความทั้งหมด</h2>
  <hr>
  @foreach($blogs as $item)
    <h4>{{$item["title"]}}</h4>
    <p>{{$item["content"]}}</p> 
    @if ($item["status"]==true)
      <p class="text text-success">publish</p>
    @else
      <p class="text text-danger">draf</p>
    @endif
    <hr>
  @endforeach
@endsection