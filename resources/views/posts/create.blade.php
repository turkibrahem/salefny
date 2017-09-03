@extends('layout.app')
           
           
            @section('content')
            Hi
                
 {{--  {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
   
   <div class=container>
   <div class="panel panel-warning">
  <div class="panel-heading">
    <h3 class="panel-title">Create Post</h3>
  </div>
  <div class="panel-body">
   

<div class="form-group">
      {{Form::label('subject', 'Subject')}}
      {{Form::text('subject','',['class'=>'form-control','placeholder'=>'Subject']) }}
    </div>
<div class="form-group">
      {{Form::label('firstname', 'First name')}}
      {{Form::text('firstname','',['class'=>'form-control','placeholder'=>'First name']) }}
    </div>

<div class="form-group">
      {{Form::label('lastname', 'Last name')}}
      {{Form::text('lastname','',['class'=>'form-control','placeholder'=>'Last name']) }}
    </div>

<div class="form-group">
      {{Form::label('body', 'Discriptions')}}
      {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Discriptions','id'=>'article-ckeditor']) }}
    </div>

<div class="form-group">
      
      {{Form::file('post_image','',['class'=>'form-control' ]) }}
    </div> 

{{Form::submit('Create',['class'=>"btn btn-primary btn-lg"]) }}

  </div>
</div>
</div>
{!! Form::close() !!}  --}}

           @endsection



 

