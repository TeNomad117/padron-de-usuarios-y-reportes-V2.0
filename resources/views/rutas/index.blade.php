@extends('layouts.admin')
@section('contenido')


<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-10">
          <h2 class="text-center mb-5">Listado de rutas</h2>
<a class="btn btn-success mb-4" href="{{ url('/form') }}">Nuevo contrato</a>

          <table class="table table-bordered table-striped text-center">
            <thead>
                  <tr>
                      <td>Calle</td>
                      <th>Colonia</th>
                      <td>Acciones</td>
                  </tr>
            </thead>

            <tbody>
                @foreach($ruta as $ruta)
                <tr>
                    <td>{{ $ruta->calle }}</td>
                    <td>{{ $ruta->colonia }}</td>
                    <td>

<a href="{{ url('/editform/'.$contrato->idnum_contrato.'/edit')}}">Editar</a>


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
