@extends('layout.app')
@section('content')
<div class="content">
    <div class="title m-b-md">
        Posts
    </div>
    @if(count($posts)>0)
        <div class="container">
            <div class="row">
                @foreach ($posts as $item)
                <div class="col-sm-4">
                    <div class="card text-white bg-primary">
                    <h5 class="card-header"><b>{{ $item->subject }}</b></h5>
                    <div class="card-body text-left">
                        <h5 class="card-title">{{ $item->firstname.' | '.$item->lastname }}</h5>
                        <span class="badge badge-pill badge-danger">Created at : {{ $item->created_at }}</span>
                        <br>
                        <a href="/posts/{{ $item->id }}" class="btn btn-warning pull-right">More</a>
                    </div>
                    </div>
                </div>
                @endforeach      
            </div>
        </div>
    @else
    <div class="alert alert-dismissible alert-danger">
        <strong>No posts</strong> 
    </div>
    @endif    
</div>
@endsection