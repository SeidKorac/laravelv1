@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}     
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, [ 'class' => 'form-control ckeditor', 'placeholder' => 'Body Text', 'visibility' => 'visible'])}}     
    </div>
    {{Form::hidden('_method', 'PATCH')}}
    {{Form::submit('Submit', ['class'=>'btn btn-outline-dark', ])}}
    {!! Form::close() !!}
@endsection