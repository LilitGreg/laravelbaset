@extends('layouts.app')

@section('content')
    <h1> Contact </h1>
     {!! LaraForm::create(null,['url' => 'contact/submit']) !!}
     {!! LaraForm::input('name') !!}
     {!! LaraForm::email('email') !!}
     {!! LaraForm::textarea('message') !!}
     {!! LaraForm::submit('Submit') !!}
     {!! LaraForm::end() !!}
   

    {{-- {!! Form::open(['url' => 'contact/submit']) !!}
     <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name','', ['class'=>'form-control','placeholder'=>'Enter name'])}}
      </div>
      <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', '', ['class'=>'form-control','placeholder'=>'Enter email'])}}
      </div>
      <div class="form-group">
        {{Form::label('message', 'Message')}}
        {{Form::textarea('message', '',['class'=>'form-control','placeholder'=>'Enter message'])}}
      </div>
      <div>
          {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
      </div>
    {!! Form::close() !!} --}}
@endsection

