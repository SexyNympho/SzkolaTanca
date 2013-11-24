@extends('layout')

@section('styles')
    @parent
    
    {{ HTML::style('css/contact.css') }}
@stop

@section('content')
<section>
    <h2>Adres</h2>
    <ul>
        <li>ul. Sezamkowa 3</li>
        <li>69-666 Stumilowy las</li>
    </ul>
</section>
<section>
    <h2>Dane kontaktowe</h2>
    <ul>
        <li>tel. 123-456-789</li>
        <li>e-mail: kubus@puchatek.com</li>
    </ul>
</section>
@stop