@extends('layout.app')

@section('content')
@include('includes.slider')
<div class="content">
    <div class="title m-b-md">
        {{ $name }}
        Index
    </div>
</div>
@endsection