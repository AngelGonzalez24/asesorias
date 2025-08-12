@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header">
                <h1>Mantto materiales</h1>
            </div>
            <div class="card-body">
                <form action={{ route('materiales.store') }} method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombreFormControl" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombreFormControl" name="nombreFormControl"
                            placeholder="Introduzca su nombre">
                    </div>

                    <div class="mb-3">
                        <label for="descripcionFormControl" class="form-label">Descripción</label>
                        <input type="text" class="form-control" id="descripcionFormControl" name="descripcionFormControl"
                            placeholder="Introduzca la descripcion">
                    </div>

                    <div class="mb-3">
                        <label for="tipoFormControl" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="tipoFormControl" name="tipoFormControl"
                            placeholder="Introduzca la descripcion">
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar material</button>
                    <a href="{{ route('materiales.index') }}" type="button" class="btn btn-primary">Lista materiales</a>
                </form>
            </div>
            <div class="card-footer">
                <p>Derechos reservados</p>
            </div>
        </div>

    </div>
@endsection
