<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Simplecart for Laravel 4</title>

</head>
<body>
@if($cart)
<table class="simplecart">
    <tr>
        <thead>
        <th>
            Id
        </th>
        <th>
            Name
        </th>
        <th>
            Opstions
        </th>
        <th>
            Price
        </th>
        <th>
            Rowid
        </th>
        <th>
            Qty
        </th>
        <th>
            Total price
        </th>
        <th>
            Remove
        </th>
        </thead>
    </tr>
    @foreach($cart as $items)
    <tr>
        <tbody style="text-align:center">
        <td>
            {{ $items['id'] }}
        </td>
        <td>
            {{ $items['name'] }}
        </td>
        <td>
            @if(isset($items['options']))
            @foreach($items['options'] as $key => $val)
            {{ $key }}: {{ $val }}
            @endforeach
            @else
            ----
            @endif
        </td>
        <td>
            {{ $items['price'] }}
        </td>
        <td>
            {{ $items['rowid'] }}
        </td>
        <td>
            {{ $items['qty'] }}
        </td>
        <td>
            {{ $items['total'] }}
        </td>
        <td>
            {{ HTML::link(URL::to('remove/'.$items['rowid']), 'Eliminar') }}
        </td>

        </tbody>
    </tr>
    @endforeach
    <tr>
        <td colspan="3">Total: {{ $total_cart }}</td>
        <td colspan="3">Items: {{ $total_items }}</td>
    </tr>
</table>
{{ HTML::link(URL::to('paystripe'), 'Pagar con Stripe') }}

{{ HTML::link(URL::to('destroy'), 'Vaciar carrito') }}
@endif

<ul style="float:left; width: 600px">
    <li style="float:left;display: inline; margin: 20px 0px 0px 30px">
        {{ Form::open(array('url' => 'insert')) }}
        {{ Form::hidden('id', 1)}}<br />
        {{ Form::label('qty', 'Cantidad') }}
        {{ Form::select('qty', array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5)) }}<br />
        {{ Form::label('name', 'Camisa') }}
        {{ Form::hidden('name', 'camisa') }}<br />
        {{ Form::label('price', 'Precio: 100') }}
        {{ Form::hidden('price', 100)}}<br />
        {{ Form::submit('Añadir') }}
        {{ Form::close() }}
    </li>
    <li style="float:left;display: inline; margin: 20px 0px 0px 30px">
        {{ Form::open(array('url' => 'insert')) }}
        {{ Form::hidden('id', 2)}}<br />
        {{ Form::label('qty', 'Cantidad') }}
        {{ Form::select('qty', array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5)) }}<br />
        {{ Form::label('name', 'Pantalón') }}
        {{ Form::hidden('name', 'pantalon') }}<br />
        {{ Form::label('price', 'Precio: 200') }}
        {{ Form::hidden('price', 200) }}<br />
        {{ Form::submit('Añadir') }}
        {{ Form::close() }}
    </li>
    <li style="float:left;display: inline; margin: 20px 0px 0px 30px">
        {{ Form::open(array('url' => 'insert')) }}
        {{ Form::hidden('id', 3)}}<br />
        {{ Form::label('qty', 'Cantidad') }}
        {{ Form::select('qty', array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5)) }}<br />
        {{ Form::label('name', 'Zapatos') }}
        {{ Form::hidden('name', 'zapatos') }}<br />
        {{ Form::label('price', 'Precio: 300') }}
        {{ Form::hidden('price', 300) }}<br />
        {{ Form::submit('Añadir') }}
        {{ Form::close() }}
    </li>
    <li style="float:left;display: inline; margin: 20px 0px 0px 30px">
        {{ Form::open(array('url' => 'insert')) }}
        {{ Form::hidden('id', 4)}}<br />
        {{ Form::label('qty', 'Cantidad') }}
        {{ Form::select('qty', array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5)) }}<br />
        {{ Form::label('name', 'Chaqueta') }}
        {{ Form::hidden('name', 'chaqueta') }}<br />
        {{ Form::label('price', 'Precio: 400') }}
        {{ Form::hidden('price', 400) }}<br />
        {{ Form::submit('Añadir') }}
        {{ Form::close() }}
    </li>
    <li style="float:left;display: inline; margin: 20px 0px 0px 30px">
        {{ Form::open(array('url' => 'insert')) }}
        {{ Form::hidden('id', 5)}}<br />
        {{ Form::label('qty', 'Cantidad') }}
        {{ Form::select('qty', array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5)) }}<br />
        {{ Form::label('name', 'Pendientes') }}
        {{ Form::hidden('name', 'pendientes') }}<br />
        {{ Form::label('price', 'Precio: 500') }}
        {{ Form::hidden('price', 500)}}<br />
        {{ Form::submit('Añadir') }}
        {{ Form::close() }}
    </li>
    <li style="float:left;display: inline; margin: 20px 0px 0px 30px">
        {{ Form::open(array('url' => 'insert')) }}
        {{ Form::hidden('id', 6)}}<br />
        {{ Form::label('qty', 'Cantidad') }}
        {{ Form::select('qty', array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5)) }}<br />
        {{ Form::label('name', 'Bufanda') }}
        {{ Form::hidden('name', 'bufanda') }}<br />
        {{ Form::label('price', 'Precio: 600') }}
        {{ Form::hidden('price', 600) }}<br />
        {{ Form::submit('Añadir') }}
        {{ Form::close() }}
    </li>
    <li style="float:left;display: inline; margin: 20px 0px 0px 30px">
        {{ Form::open(array('url' => 'insert')) }}
        {{ Form::hidden('id', 7)}}<br />
        {{ Form::label('qty', 'Cantidad') }}
        {{ Form::select('qty', array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5)) }}<br />
        {{ Form::label('name', 'Bañador') }}
        {{ Form::hidden('name', 'bañador') }}<br />
        {{ Form::label('price', 'Precio: 700') }}
        {{ Form::hidden('price', 700) }}<br />
        {{ Form::submit('Añadir') }}
        {{ Form::close() }}
    </li>
    <li style="float:left;display: inline; margin: 20px 0px 0px 30px">
        {{ Form::open(array('url' => 'insert')) }}
        {{ Form::hidden('id', 8)}}<br />
        {{ Form::label('qty', 'Cantidad') }}
        {{ Form::select('qty', array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5)) }}<br />
        {{ Form::label('name', 'Zapatillas') }}
        {{ Form::hidden('name', 'zapatillas') }}<br />
        {{ Form::label('price', 'Precio: 800') }}
        {{ Form::hidden('price', 800) }}<br />
        {{ Form::submit('Añadir') }}
        {{ Form::close() }}
    </li>
</ul>
</body>
</html>