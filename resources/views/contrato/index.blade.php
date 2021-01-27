@extends('layouts.admin')
@section('contenido')

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-10">
          <h2 class="text-center mb-5">Listado de contratos</h2>
<a class="btn btn-success mb-4" href="{{ url('/form') }}">Nuevo contrato</a>

<div class="col-lg-10">
    <div class="input-group">
      <input type="text" class="form-control">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Buscar contrato</button>
      </span>
    </div>
  </div>
</div>

          <table class="table table-bordered table-striped text-center">
            <thead>
                  <tr>
                      <td>Id</td>
                      <th>Nombre</th>
                      <th>Fecha Alta</th>
                      <th>Telefono</th>
                      <td>Acciones</td>
                  </tr>
            </thead>

            <tbody>
                @foreach($contrato as $contrato)
                <tr>
                    <td>{{ $contrato->idnum_contrato }}</td>
                    <td>{{ $contrato->nombre_razon }}</td>
                    <td>{{ $contrato->fecha_alta }}</td>
                    <td>{{ $contrato->telefono }}</td>
                    <td>

            <form method="post" action="{{url('/delete/'.$contrato->idnum_contrato.'/delete')}}">
                        {{csrf_field()}}
            <a href="{{ url('/editform/'.$contrato->idnum_contrato.'/edit')}}" class="btn btn-info">Editar</a>
            <button type="submit" class="btn btn-danger">Eliminar</button>

                    </td>
                </tr>
                @endforeach
            </tbody>

          </table>
          <!--{$contrato->links() }}-->

      </div>
    </div>
</div>
@endsection
