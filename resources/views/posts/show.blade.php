@extends('layouts.app')
@section('content')
<div class="content">
    <div class="title m-b-md">
        <h1>Post details</h1> 
    </div>
    <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $post->subject }}</div>
                        <div class="panel-body">
                                <h5>{{ $post->firstname.' | '.$post->lastname }}</h5>
                                <p><b>{!! $post->body !!}</b></p>
                                <span>Created at : {{ $post->created_at }}</span>
                                <br><br><br>
                                {!! Form::open(array("action"=>["PostsController@destroy",$post->id],"method"=>"POST")) !!}
                                {!! Form::hidden('_method', 'DELETE') !!}
                                {!! Form::submit("Delete",["class"=>"btn btn-danger"]) !!}
                                {!! Form::close() !!}
                                <br>
                                <a href="/posts/{{ $post->id }}/edit" class="btn btn-lg">Edit</a>
                                <a href="/posts" class="btn btn-warning">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
</div>
@endsection