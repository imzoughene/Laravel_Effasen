@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Create Post</h1>
                {!! Form::open(array("action"=>"PostsController@store","method"=>"POST")) !!}
                <div class="form-group">
                    {!! Form::label('subject', 'Subject') !!} 
                    {!! Form::text('subject','', ['class'=>'form-control','placeholder'=>'Subject']) !!}  
                </div>
                <div class="form-group">
                    {!! Form::label('firstname', 'First name') !!} 
                    {!! Form::text('firstname','', ['class'=>'form-control','placeholder'=>'First name']) !!}  
                </div>
                <div class="form-group">
                    {!! Form::label('lastname', 'Last name') !!} 
                    {!! Form::text('lastname','', ['class'=>'form-control','placeholder'=>'Last name']) !!}  
                </div>
                <div class="form-group">
                    {!! Form::label('body', 'Description') !!} 
                    {!! Form::textarea('body','', ['class'=>'form-control','placeholder'=>'Description']) !!}  
                </div>
                {!! Form::submit("Submit",["class"=>"btn btn-primary"]) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection