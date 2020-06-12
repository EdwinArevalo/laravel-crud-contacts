@extends('layouts.app')
@section('content')

<div class="col-md-5">
    <div class="card">
        <div class="card-header">
            <h4>Añadir nuevo Contacto</h4>
        </div>
<form action="{{url('/contacts')}}" class="card-body" method="post">
    {{ csrf_field() }}
    
    <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" required>
    </div>  
    <div class="form-group">
    <label for="apellido_paterno">Apellido Paterno</label>
    <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" required>
</div>  
<div class="form-group">
    <label for="apellido_materno">Apellido Materno</label>
    <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" required>
</div>  
<div class="form-group">
    <label for="correo">Correo</label>
    <input type="email" class="form-control" name="correo" id="correo" required>
</div>  
<div class="form-group">
    <label for="edad">Edad</label>
    <input type="number" class="form-control" name="edad" id="edad" required>
</div>   
    <input type="submit" class="btn btn-primary btn-block" value="Agregar Contacto">
 
</form>
</div>
</div> 
@endsection