@extends('layout')

@section('breadcrumbs')
    @parent
    
    <li>{{ link_to_route('priceList', 'Cennik') }}</li>
@stop