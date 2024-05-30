@extends('layout')
@section('title', 'บทความทั้งหมด')
@section('content')
  <h2 class="text text-center py-2">บทความทั้งหมด</h2>
  <table class="table table-bordered text-center">
    <thead>
      <tr>
        <th scope="col">title</th>
        <th scope="col">content</th>
        <th scope="col">status</th>
      </tr>
    </thead>
    <tbody>
      @foreach($blogs as $item)
      <tr>
        <td>{{$item["title"]}}</td>
        <td>{{$item["content"]}}</td> 
        <td>  
          @if ($item["status"]==true)
            <a href="#" class="btn btn-success">publish</a>
          @else
            <a href="#" class="btn btn-warning">draf</a>
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
 
  
@endsection