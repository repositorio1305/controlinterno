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
            <div class="card card-success">
                    <div class="card-header ">
                            <h3 class="card-title">Datos del nuevo usuario</h3>
                    </div>
                    <div class="card-body">
                            @include("admin.registro.usuario")
                    </div>
            </div>
     </div>
@endsection