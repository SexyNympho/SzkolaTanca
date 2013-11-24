@extends('layout')

@section('styles')
    @parent
    
    {{ HTML::style('css/event.css') }}
    
@stop

@section('admin')
    {{ link_to_route('addEvent', 'new event') }}
@stop