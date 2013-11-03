@extends('layout')

@section('admin')
    {{ link_to_action('ScheduleController@Admin', 'manage dance classes') }}
@stop