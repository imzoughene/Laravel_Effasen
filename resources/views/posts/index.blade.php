@extends('layout.app')
@section('content')
<div class="content">
    <div class="title m-b-md">
        Posts
    </div>
    <ul>
        @foreach ($posts as $item)
          <li>{{ $item->body }}</li>  
        @endforeach
    </ul>
</div>
@endsection