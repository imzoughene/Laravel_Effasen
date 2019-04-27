@extends('layout.app')
@section('content')
<div class="content">
    <div class="title m-b-md">
        Programming languages
    </div>
    <div>
        <ol>
            @foreach($girlFriends as $girl => $g)
            <li style="color:red;font-size:35px"> {{ $g }} </li>
            @endforeach
        </ol>
    </div>
</div>
@endsection