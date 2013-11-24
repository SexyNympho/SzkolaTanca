@extends('prices/layout')

@section('content')
<table>
    <tr>
        <th>Styl tańca</th>
        <th>1 zajęcia</th>
        <th>4 zajęcia</th>
        <th>8 zajęć</th>
    </tr>
    @foreach($prices as $price)
    <tr>
        <td>{{ $price->danceStyle->name }}</td>
        <td>{{ $price->single }}zł</td>
        <td>{{ $price->quadruple }}zł</td>
        <td>{{ $price->octuple }}zł</td>
    </tr>
    @endforeach
</table>
@stop

@section('admin')
    {{ link_to_route('managePrices', 'manage') }}
@stop