@extends("theme.$theme.layout")
@section("titulo")
Sistema de Menus
@endsection
@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/Javascript"></script>
@endsection

@section("contenido")
<div class="row">
     @include('admin.registro.mostrar')
     <div class="col-lg-12">
         @include('includes.form-error')
         @include('includes.mensaje')
        <!-- InicioHeader-->
        <div class="card card-primary">
        <div class="card-header ">
                <h3 class="card-title">Asignar empleado</h3>
                <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fas fa-minus"></i></button>
                </div>
          </div>
        <!-- FinHeader-->
        <!-- InicioBody-->
        <form action="{{route('guardar_empleado')}}" id="form_general" class="form-horizontal" method="POST">
           @csrf
        <div class="card-body">
                @include("admin.asignar.empleado.form")
        </div>
        <!-- FinBody-->
        <!-- InicioFooter-->
        <div class="card-footer">
               @include("includes.boton-form-crear-empleados")
        </div>
        <!-- FinFooter-->
        </form>
        @include('includes.progreso')

        </div>


     </div>
@endsection