@extends('layouts.app')
@section('content')

@if (Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
{{
        Session::get('Mensaje')
}}  
</div> 
@endif
@if (Session::has('MensajeRed'))
<div class="alert alert-danger" role="alert">
{{
        Session::get('MensajeRed')
}}  
</div> 
@endif

<a href="{{ url('/create') }}"><button type="button" class="btn btn-primary">Agregar Contacto</button>
</a>
<div class="mt-3"></div>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Edad</th>
            <th>Acciones</th> 
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$contact->nombre}}</td>
                <td>{{$contact->apellido_paterno}}</td>
                <td>{{$contact->apellido_materno}}</td>
                <td>{{$contact->correo}}</td>
                <td>{{$contact->edad}}</td>
                <td>
                    <div class="list-group list-group-horizontal-sm">
                    <a href="{{ url('/'.$contact->id.'/edit') }}" style="margin: 2px">
                        <button type="button" class="btn btn-warning">Editar</button>
                    </a>  
                    <form method="POST" action="{{url('/'.$contact->id.'/')}}" style="margin: 2px">
                        {{csrf_field()}}
                        {{ method_field('DELETE')}}
                        <button type="submit" onclick="return confirm('¿Desea Borrar este Contacto?');" class="btn btn-danger">Borrar</button>
                    </form>
                </div>
                </td> 
            </tr>
        @endforeach 
    </tbody>
</table>
@endsection