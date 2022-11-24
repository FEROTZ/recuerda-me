@extends('layouts.landing')
@section('content')

<table class="table table-ligth table-inverse table-center">
    <thead class="thead-ligth">
        <tr>
            <th>#</th>
            <th>Paquete</th>
            <th>Precio</th>
            <th>Numero de imagenes</th>
            <th>Numero de videos</th>
            <th>Numero de destinatarios</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($servicios as $servicio)
        <tr>
            <td>{{$servicio->id}}</td>
            <td>{{$servicio->name}}</td>
            <td> {{$servicio->price}}</td>
            <td> {{$servicio->num_images}}</td>
            <td> {{$servicio->num_videos}}</td>
            <td> {{$servicio->num_recipients}}</td>

            <td>
                <a href="{{ route('servicios.edit',$servicio->id)}}">Editar</a>|

                <form action="{{ route('servicios.destroy',$servicio->id)}}" method="POST">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection