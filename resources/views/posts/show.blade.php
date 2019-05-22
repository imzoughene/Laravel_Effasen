@extends('layout.app')
@section('content')
<div class="content">
    <div class="title m-b-md">
        Post details
    </div>
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="card text-white bg-primary">
                    <h5 class="card-header"><b>{{ $post->subject }}</b></h5>
                    <div class="card-body text-left">
                        <h5 class="card-title">{{ $post->firstname.' | '.$post->lastname }}</h5>
                        <p style="color:black"><b>{!! $post->body !!}</b></p>
                        <span class="badge badge-pill badge-danger">Created at : {{ $post->created_at }}</span>
                        <br>
                    </div>
                    <a href="/posts" class="btn btn-warning pull-right">Back</a>
                    </div>
                </div>
            </div>
        </div>
     
</div>
@endsection