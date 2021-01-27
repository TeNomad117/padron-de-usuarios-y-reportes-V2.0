@extends('layouts.admin')
@section('contenido')

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
    <h3>Agregar nueva ruta</h3>
<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-7 mt-5">

    <div class="card">
        <form >
            @csrf
            <div class="card-header text-left">Nuevo Contrato</div>
            <div class="card-body">

    <div class="row form-group">
    <label for="" class="col-2">Calle</label>
    <input type="text" name="calle" class="form-control col-md-9" placeholder="Calle..." required>
    </div>

    <div class="row form-group">
    <label for="" class="col-2">Colonia</label>
    <input type="text" name="colonia" class="form-control col-md-9" placeholder="Colonia..." required>
    </div>

</form>
</div>
</div>
</div>
</div>
</div>
@endsection
