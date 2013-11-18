@extends('layout')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ asset('css/schedule.css') }}"/>
@stop

@section('admin')
    {{ link_to_action('ScheduleController@Admin', 'manage dance classes') }}
@stop