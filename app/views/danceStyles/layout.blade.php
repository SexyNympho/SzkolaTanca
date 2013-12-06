@extends('layout')

@section('breadcrumbs')
    @parent
    
    <li>{{ link_to_route('styles', 'Style tańca') }}</li>
@stop