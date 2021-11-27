<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table{
        width: 97%;
        border-collapse: collapse;
        border: #ACABAB 1px solid;
        font-size: 13px;
        margin: auto;
        }
        table thead {
            color: white;
            background-color: #6B6B6B;
        }
        tr, td {
        height: 48px;
        border: #ACABAB 1px solid;
        text-align:center;
        }
        tr:nth-child(even){
        color: #6B6B6B;
        background-color: #D8D8D8;
        }
        tbody tr:nth-child(odd){
        color: #6B6B6B;
        background-color: #FFFFFF;
        }
</style>
<body>
    <h3 align = "center">Reporte egresados</h3>
<table class="table table-striped" >
    <thead>

        <tr class="text-center">
            <th width="50px">Número</th>
            <th width = "100px">Codigo Matricula</th>
            <th>Nombres</th>
            <th>Genero</th>
            <th>Fecha nacimiento</th>
            <th>Telefono</th>
        </tr>
    </thead>
    <tbody>
        @if (count($egresados)<=0)
            <tr class="text-center">
                <td colspan="8">No hay resultados</td>
            </tr>
        @else
       @php
           $i=1;
       @endphp
            @foreach ($egresados as $egresado)
        <tr class="text-center">
            <td>@php
                echo $i;
            @endphp</td>
            <td>{{$egresado->matricula}}</td>
            <td class="text-capitalize">{{$egresado->ap_paterno}} {{$egresado->ap_materno}} {{$egresado->nombres}}</td>
            <td>{{$egresado->genero}}</td>
            <td>{{$egresado->fecha_nacimiento}}</td>
            <td>{{$egresado->telefono}}</td>
        </tr>
        @php
            $i++;
        @endphp
        @endforeach
        @endif

    </tbody>
</table>
</body>
</html>
