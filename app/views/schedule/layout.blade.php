@extends('layout')

@section('styles')
    @parent
    {{ HTML::style('css/schedule.css') }}
@stop

@section('admin')
    {{ link_to_action('ScheduleController@Admin', 'manage dance classes') }}
@stop