@extends('layouts.app')
@section('content')
<div class="col-md-5">
    <div class="card">
        <div class="card-header">
            <h4>Modificar Contacto</h4>
        </div>
<form action="{{url('/'.$contact->id)}}" class="card-body" method="post">
    {{ csrf_field() }} 
    {{ method_field('PATCH')}}
    <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" value="{{$contact->nombre}}" required>
    </div>  
    <div class="form-group">
    <label for="apellido_paterno">Apellido Paterno</label>
    <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" value="{{$contact->apellido_paterno}}" required>
</div>  
<div class="form-group">
    <label for="apellido_materno">Apellido Materno</label>
    <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" value="{{$contact->apellido_materno}}" required>
</div>  
<div class="form-group">
    <label for="correo">Correo</label>
    <input type="email" class="form-control" name="correo" id="correo" value="{{$contact->correo}}" required>
</div>  
<div class="form-group">
    <label for="edad">Edad</label>
    <input type="number" class="form-control" name="edad" id="edad" value="{{$contact->edad}}" required>
</div>   
    <input type="submit" class="btn btn-primary btn-block" value="Modificar"> 
</form>
</div>
</div> 
@endsection


