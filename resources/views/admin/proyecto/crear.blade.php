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
                <h3 class="card-title">Nuevo proyecto</h3>
          </div>
        <!-- FinHeader-->
        <!-- InicioBody-->
        <form action="{{route('guardar_proyecto')}}" id="form_general" class="form-horizontal" method="POST">
        @csrf
        <div class="card-body">
                @include('admin.proyecto.form')
        </div>
        <!-- FinBody-->
        <!-- InicioFooter-->
        <div class="card-footer">
               @include("includes.boton-form-crear-empleados")
        </div>
        <!-- FinFooter-->
        </form>
        <div class="card-body">
                        <div class="progress">
                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                    <span class="sr-only">40% Complete (success)</span>
                                  </div>      
                        </div>
                      </div>
        </div>
     </div>
@endsection