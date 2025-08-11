@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header">
                <h1>Mantto materiales</h1>
            </div>
            <div class="card-body">
                <form action ="{{ route('materiales.update', $material->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nombreFormControl" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombreFormControl"
                            name="nombreFormControl" value={{ $material->nombre }} maxlength="100">
                    </div>

                    <div class="mb-3">
                        <label for="descripcionFormControl" class="form-label">Descripción</label>
                        <input type="text" class="form-control" id="descripcionFormControl" name="descripcionFormControl"
                            value={{ $material->descripcion }}>
                    </div>

                    <div class="mb-3">
                        <label for="tipoFormControl" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="tipoFormControl" name="tipoFormControl"
                            value={{ $material->tipo }}>
                    </div>

                    <button type="submit" class="btn btn-primary">Actualizar material</button>

                </form>
            </div>
            <div class="card-footer">
                <p>Derechos reservados</p>
            </div>
        </div>

    </div>
@endsection
