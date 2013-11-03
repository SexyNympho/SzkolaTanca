@extends('layout')

@section('admin')
    {{ link_to_action('CalendarController@AddEvent', 'new event') }}
@stop