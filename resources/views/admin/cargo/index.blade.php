@extends("theme.$theme.layout")
@section("titulo")
Cargos
@endsection
@section("contenido")
<div class="row">
     <div class="col-lg-12">
     <div class="card card-primary">
        <!-- InicioHeader-->
            <div class="card-header">
                <h3 class="card-title">Cargos</h3>
          </div>
        <!-- FinHeader-->
        <!-- InicioBody-->
        <div class="card-body table-responsive p-0">
                <table class="table table-bordered table-striped table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Cargo</th>
                      <th>Fecha Inicio</th>
                      <th>Fecha Fin</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($cargos as $cargo)
                    <tr>
                        <td>{{$cargo->id}}</td>
                        <td>{{$cargo->cargo}}</td>
                        <td>{{$cargo->created_at}}</td>
                        <td>{{$cargo->updated_at}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- FinBody-->
     </div>
</div>

@endsection
