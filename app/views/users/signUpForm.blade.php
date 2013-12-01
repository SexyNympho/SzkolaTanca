@extends('users/layout')

@section('content')
    {{ Form::model($vm, array('route' => array('postSignUp', 'vm' => 'UserVM'))) }}
        <p>Name: {{ Form::text('name') }}</p>
        <p>Surname: {{ Form::text('surname') }}</p>
        <p>E-mail: {{ Form::email('email', null, array('placeholder' => 'your@email.com')) }}</p>
        <p>Login: {{ Form::text('login') }}</p>
        <p>Password: {{ Form::password('password') }}</p>
        <p>{{ Form::submit('Register') }}</p>
    {{ Form::close() }}
@stop