
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body>
    <h1>Este es el panel de admin</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Nombre del cliente</th>
                    <th>Dias de suscripcion</th>
                </tr>
            </thead>
            <tbody>
            @foreach($sus as $su)
                <tr>
                    <td>{{$su->name}}, {{$su->apellido}}</td>
                    <td>{{$su->dias}}</td>
                    <td><a href="{{ route('suscripcion.mostrarSuscripcion', ['id'=>$su->id]) }}"><button class="mod">Modificar suscripcion</button></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('suscripcion.editarSuscripcion')}}"><button class="ag">Agregar cliente</button></a>  
    </div>
</body>
</html>