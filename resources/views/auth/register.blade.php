@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form"  method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group{{ $errors->has('last_namea') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Apellido Paterno</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('second_last_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Apellido Materno</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="second_last_name" value="{{ old('second_last_name') }}">

                                @if ($errors->has('second_last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('second_last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Correo Electronico</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('rol_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Perfil de Usuario</label>

                            <div class="col-md-6">
                                <div class="ui selection dropdown">
                                    <input type="hidden" name="rol_name">
                                    <i class="dropdown icon"></i>
                                    <div class="default text">Perfil</div>
                                    <div class="menu">
                                        <div class="item" data-value="1">Administrador</div>
                                        <div class="item" data-value="2">Tecnico</div>
                                        <div class="item" data-value="3">Ventas</div>
                                    </div>
                                </div>

                                @if ($errors->has('rol_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rol_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Telefono</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="telephone" value="{{ old('telephone') }}">

                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('cell_number') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Telefono Celular</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="cell_number" value="{{ old('cell_number') }}">

                                @if ($errors->has('cell_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cell_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
