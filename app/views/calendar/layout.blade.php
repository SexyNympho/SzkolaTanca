@extends('layout')

@section('styles')
    @parent
    
    {{ HTML::style('css/calendar.css') }}
@stop

@section('admin')
    {{ link_to_route('addEvent', 'new event') }}
@stop