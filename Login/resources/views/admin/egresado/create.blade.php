
@extends('layouts.app')

@section('content')

<body>
    <div class="container">
        <h4>Registrar Egresados</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('egresado.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="matricula">Matricula</label>
                        <input type="text" class="form-control" name="matricula" required maxlength="50" ">
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellido paterno</label>
                        <input type="text" class="form-control" name="ap_paterno" required maxlength="50" ">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Apellido materno</label>
                        <input type="text" class="form-control" name="ap_materno" required maxlength="30" >
                    </div>
                    <div class="form-group">
                        <label for="documento">Nombres</label>
                        <input type="text" class="form-control" name="nombres" required maxlength="15" >
                    </div>
                    <div class="form-group">
                        <label for="direccion">Genero</label>
                        <select name="genero" class="form-control">

                            <option selected>Masculino</option>

                            <option>Femenino</option>

                          </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name="fecha_nacimiento" required maxlength="50" >
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" name="telefono" required maxlength="9">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-primary" value="Cancelar">
                        <a href="javascript:history.back()">Ir al listado</a>
                    </div>
                </form>
            </div>

        </div>

    </div>

</body>
@endsection
