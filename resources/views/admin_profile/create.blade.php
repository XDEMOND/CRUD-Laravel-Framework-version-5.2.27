
@extends('layouts.app')

@section('content')
  

  <div class="ui horizontal divider">or</div>
<form class="ui form segment" action="/admin_create" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token"  value="{{ csrf_token() }}">
  <p></p>
  <div class="two fields">
    <div class="field">
      <label>Nombre</label>
      <input placeholder="Nombre" id="name" name="name" type="text">
    </div>
    <div class="field">
      <label>Apellido Paterno</label>
      <input placeholder="Apellido Paterno" id="apaterno" name="last_name" type="text">
    </div>
  </div>
  <div class="three fields">
    <div class="field">
      <label>Apellido Materno</label>
      <input placeholder="Apellido Materno" id="amaterno" name="second_last_name" type="text">
    </div>
    <div class="field">
      <label>Telefono</label>
      <input placeholder="Telefono" name="telephone" id="tel" type="text">
    </div>
    <div class="field">
      <label>Telefono Celular</label>
      <input placeholder="Telefono Celular" name="cell_number" id="cell" type="text">
    </div>
  </div>
  <div class="two fields">
    <div class="field">
      <label>Email</label>
      <input placeholder="Email" name="email" id="mail" type="text">
    </div>
    <div class="field">
      <label>Password</label>
      <input type="password" name="password" id="pass">

    </div>
  </div>
  
  <div class="inline field">
   
  </div>
  <input type="submit" class="ui green button" value="Registrar usuario">

  <div class="ui error message"></div>
</form>


@endsection