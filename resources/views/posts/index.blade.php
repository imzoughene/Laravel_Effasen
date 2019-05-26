@extends('layouts.app')
@section('content')
<div class="content">
    <div class="title m-b-md">
       <h1>Posts</h1> 
    </div>
    <br><br>
    @if(count($posts)>0)
        <div class="container">
            <div class="row">
                @foreach ($posts as $item) 
                <div class="col-sm-4">
                    <div class="panel panel-default"> 
                        <div class="panel-heading">{{ $item->firstname.' | '.$item->lastname }}</div>
                        <div class="panel-body">
                            <h3>{{ $item->subject }}</h3>
                            <span class="text-success">Created at : {{ $item->created_at }}</span>
                            <br>
                            <a href="/posts/{{ $item->id }}" class="btn btn-warning pull-right">More</a>
                        </div>
                    </div>
                </div> 
                @endforeach      
            </div>
            <div class="row">
                <div class="col-4 offset-4">
                    {{  $posts->links() }}
                </div>
            </div>
        </div>
    @else
    <div class="alert alert-dismissible alert-danger">
        <strong>No posts</strong> 
    </div>
    @endif    
</div>
@endsection