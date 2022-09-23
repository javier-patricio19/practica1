<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>Práctica 1</title>
</head>
<body>
    @if ($errors->any())
        <div class="alerta alerta-rojo">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @else
        @isset($num1, $num2, $resultado)
        <h3 class="alerta resultado">El resultado de  
            {{$num1.' '.$op.' '.$num2.' = '.$resultado }}
        </h3>
        @endisset
    @endif
    <br>
    <div class="contenedor-calculadora">
        <div class="contenedor-imagen"><div class="imagen"></div></div>
        <div class="contenedor-form">
            <form action="/calcular" method="get">
                <select name="operacion" id="operacion">
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="multi">Multiplicación</option>
                    <option value="division">División</option>
                </select>
                <input type="text" name="num1" id="num1" placeholder="Numero 1">
                <input type="text" name="num2" id="num2" placeholder="Numero 2">
                <button type="submit">Calcular</button>
            </form>
        </div>
    </div>
</body>
</html>