<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('js/ag.js')}}"></script>
    <title>Document</title>
</head>
<body>
        <table>
            <thead>
                <tr>
                    <th>Nombre del cliente</th>
                </tr>
            </thead>
            <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->name}}</td>
                    <td>{{$cliente->apellido}}</td>
                    <td><button class="bot" id="{{$cliente->id}}">Agregar suscripcion</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <input type="text" id="dias">
        <h1 style="display: none;" id="confirmacion">Hecho</h1>
</body>
</html>