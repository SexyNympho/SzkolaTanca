@extends('layout')

@section('styles')
    @parent
    
    {{ HTML::style('css/instructors.css') }}
@stop

@section('breadcrumbs')
    @parent
    
    <li>{{ link_to_route('showAllInstructors', 'Instruktorzy') }}</li>
@stop