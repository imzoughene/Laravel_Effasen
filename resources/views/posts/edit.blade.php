@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Edit Post</h1>
                {!! Form::open(array("action"=>["PostsController@update",$post->id],"method"=>"POST")) !!}
                <div class="form-group">
                    {!! Form::label('subject', 'Subject') !!} 
                    {!! Form::text('subject',$post->subject, ['class'=>'form-control','placeholder'=>'Subject']) !!}  
                </div>
                <div class="form-group">
                    {!! Form::label('firstname', 'First name') !!} 
                    {!! Form::text('firstname',$post->firstname, ['class'=>'form-control','placeholder'=>'First name']) !!}  
                </div>
                <div class="form-group">
                    {!! Form::label('lastname', 'Last name') !!} 
                    {!! Form::text('lastname',$post->lastname, ['class'=>'form-control','placeholder'=>'Last name']) !!}  
                </div>
                <div class="form-group">
                    {!! Form::label('body', 'Description') !!} 
                    {!! Form::textarea('body',$post->body, ['class'=>'form-control','placeholder'=>'Description']) !!}  
                </div>
              
                {!! Form::hidden('_method', 'PUT') !!}
                
                {!! Form::submit("Update",["class"=>"btn btn-primary"]) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection