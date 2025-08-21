@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header">
                <h1>Lista de asesores</h1>
            </div>
            <div class="card-body">
                <a href="{{ route('asesor.create') }}" type="button" class="btn btn-primary">Agregar material</a>
                <table class="table table-striped table-hover">
                    <thead>
                        <th class="col-1 gap-1">Id </th>
                        <th class="col-2">Nombre</th>
                        <th class="col-5 gap-2">Descripción </th>
                        <th style="col-1">Tipo </th>
                        <th class="col-1">View</th>
                        <th class="col-1">Edit</th>
                        <th class="col-1">Del</th>
                    </thead>
                    @if ($asesores->isEmpty())
                        <span class="badge text-bg-danger">No existen registros en la tabla asesores </span>
                    @else
                        @foreach ($asesores as $asesor)
                            <tr>
                                <td>{{ $asesor->id }}</td>
                                <td>{{ $asesor->nombre }}</td>
                                <td>{{ $asesor->descripcion }}</td>
                                <td>{{ $asesor->tipo }}</td>
                                <td>
                                    <a href="{{ route('asesores.show', $asesor->id) }}" type="button"
                                        class="btn btn-info">View</a>
                                </td>
                                <td>
                                    <a href="{{ route('asesores.edit', $asesor->id) }}" type="button"
                                        class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('asesores.destroy', $asesor->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </table>

                <div class="d-flex justify-content-center">
                    {{ $asesores->links() }}
                </div>

            </div>
            <div class="card-footer">
                Derechos reservados
            </div>


        </div>



    </div>
@endsection
