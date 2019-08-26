@extends('layouts.app')

@section('content')




@if ($users->count())

    <br style="color: #0a0a0b">
   <hr style="color: #0a0a0b">



    <table class="ui inverted table" style="height: auto">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Telefono</th>
            <th>Telefono Celular</th>
            <th>Email</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>

                <td>{{ $user->name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->second_last_name }}</td>
                <td>{{ $user->telephone }}</td>
                <td>{{ $user->cell_number }}</td>
                <td>{{ $user->email }}</td>

                <td>
                    <form action="{{ url('admin_index/'.$user->id) }}" method="POST">
                        {!! csrf_field() !!}
                        {!! method_field('DELETE') !!}

                        <button type="submit" id="delete-user-{{ $user->id }}" class="btn btn-danger">
                            <i class="fa fa-btn fa-trash"></i>Borrar
                        </button>
                    </form>
                </td>
                <td>

                    <a href="/admin_update/{{ $user->id }}">

                        <button type="submit"  class="btn btn-primary">
                            <i class="fa fa-btn fa-trash"></i>Actualizar
                        </button>
                    </a>
                </td>
            </tr>
        @endforeach

        </tbody>
        <tfoot>

    </table>





@else
    There are no users
@endif


@endsection

