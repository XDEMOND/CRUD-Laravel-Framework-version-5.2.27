@extends('layouts.app')

@section('content')
  
  <div class="ui horizontal divider">or</div>
<form class="ui form segment" action="/admin_update/{{$user->id}}" method="post" enctype="multipart/form-data">
   <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
  <p></p>
  <div class="two fields">
    <div class="field">
      <label>Nombre</label>
      <input placeholder="Nombre" name="name" type="text" value='{{ $user->name}}'>
    </div>
    <div class="field">
      <label>Apellido Paterno</label>
      <input placeholder="Apellido paterno" name="last_name" type="text" value='{{ $user->last_name}}'>
    </div>
  </div>
  <div class="three fields">
    <div class="field">
      <label>Apellido Materno</label>
      <input placeholder="Apellido Materno" name="second_last_name" type="text" value='{{ $user->second_last_name}}'>
    </div>
    <div class="field">
      <label>Telefono</label>
      <input placeholder="Telefono" name="telephone" type="text" value='{{ $user->telephone}}'>
    </div>
    <div class="field">
      <label>Telefono Celular</label>
      <input placeholder="Telefono Celular" name="cell_number" type="text" value='{{ $user->cell_number}}'>
    </div>
  </div>
  <div class="two fields">
    <div class="field">
      <label>Email</label>
      <input placeholder="Email" name="email" type="text" value='{{ $user->email}}'>
    </div>
    <div class="field">
      <label>Password</label>
      <input type="password" name="password" >

    </div>
  </div>
  
  <div class="inline field">
   
  </div>
  <input type="submit" class="ui green button" value="Actualizar usuario">

  <div class="ui error message"></div>
</form>




@endsection
