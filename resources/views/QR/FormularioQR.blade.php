@extends('layouts.landing')
    @section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    
<div class="row">
    <div class="col-2 offset-10" offset-10>
      <div class="text-center Bricardo">
        <button type="button" class="btn btn-dark btn-lg" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="botonCrear">
          <i class="bi bi-plus-circle-fill"></i> Generar Codigo QR
        </button>
      </div>
    </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog cuerpocol">
<div class="modal-content ">
<div class="modal-header ricardocol">
  <h5 class="modal-title ricardtex" id="exampleModalLabel">Crear QR</h5>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form method="POST" id="formulario" enctype="multipart/form-data">
  <div class="modal-content">
    <div class="modal-body">
        <label for="nombre">Ingrese su nombre</label>
      <input type="text" name="nombre" id="nombre" class="form-control">
      <br/>
      <label for="nombre">Apellidos</label>
      <input type="text" name="apellidos" id="apellidos" class="form-control">
      <br/>
      <label for="nombre">fecha de fallecimiento</label>
      <input type="date" name="date" id="date" class="form-control">
      <br/>
      <label for="nombre">Ingrese su email</label>
      <input type="text" name="nombre" id="nombre" class="form-control">
      <br/>
      <label for="apellidos">Ingrese la descripcion del difunto</label>
      <input type="text" name="descripcion" id="descripcion" class="form-control">
      <br>
      <label for="file">Agregar Fotografia</label>
      <input type="file" name="file">
      <br/>
    </div>
    <div class="modal-footer">
      <input type="hidden" name="id_usuario" id="id_usuario">
      <input type="hidden" name="operacion" id="operacion">
      <input type="submit" name="action" id="action" class="btn btn-dark" value="Crear QR">
    </div>
  </div>
</form>
</div>
</div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
@endsection