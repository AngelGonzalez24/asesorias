@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header">
                <h1>Lista de materiales</h1>
            </div>
            <div class="card-body">
                <a href="{{ route('materiales.create') }}" type="button" class="btn btn-primary">Agregar material</a>


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
                    @if ($materiales->isEmpty())
                        <p>No hay usuarios registrados.</p>
                    @else
                        @foreach ($materiales as $material)
                            <tr>
                                <td>{{ $material->id }}</td>
                                <td>{{ $material->nombre }}</td>
                                <td>{{ $material->descripcion }}</td>
                                <td>{{ $material->tipo }}</td>
                                <td>
                                    <a href="{{ route('materiales.show', $material->id) }}" type="button"
                                        class="btn btn-info">View</a>
                                </td>
                                <td>
                                    <a href="{{ route('materiales.edit', $material->id) }}" type="button"
                                        class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Del
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </table>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">


                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                Derechos reservados
            </div>


        </div>



    </div>
@endsection
