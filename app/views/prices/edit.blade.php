@extends('prices/layout')

@section('content')
<table>
    <tr>
        <th>style</th>
        <th>single</th>
        <th>quadruple</th>
        <th>octuple</th>
    </tr>
    @foreach($prices as $price)
    <tr>
        <td>{{ $price->danceStyle->name }}</td>
        {{ @Form::model($price, array('route' => array('updatePrice', 'danceStyle' => $price->danceStyle->id))) }}
        <td>{{ @Form::text('single') }}</td>
        <td>{{ @Form::text('quadruple') }}</td>
        <td>{{ @Form::text('octuple') }}</td>
        <td>{{ @Form::submit('update') }}</td>
        {{ @Form::close() }}
    </tr>
    @endforeach
    <?php
        $thereArePricesToAdd = count($noPricesStyles) !== 0;
    ?>
    <tr>
        <th colspan="5">
            @if ($thereArePricesToAdd)
            add prices to styles
            @else
            all styles have prices already
            @endif
        </th>
    </tr>
    @if ($thereArePricesToAdd)
    <tr>
        {{ @Form::open(array('route' => 'savePrice')) }}
        <td>{{ @Form::select('danceStyleId', $noPricesStyles) }}</td>
        <td>{{ @Form::text('single') }}</td>
        <td>{{ @Form::text('quadruple') }}</td>
        <td>{{ @Form::text('octuple') }}</td>
        <td>{{ @Form::submit('update') }}</td>
        {{ @Form::close() }}
    </tr>
    @endif
</table>
@stop