@extends("theme.$theme.layout")
@section("titulo")
Sistema de Menus
@endsection
@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/Javascript"></script>
@endsection

@section("contenido")
<div class="row d-flex align-items-stretch">
        @include('admin.registro.mostrar')
     <div class="col-lg-12">
         @include('includes.form-error')
         @include('includes.mensaje')
     <div class="card">
        <!-- InicioHeader-->
            <div class="card-header">
                <h3 class="card-title">Menu</h3>
          </div>
        <!-- FinHeader-->
        <!-- InicioBody-->
        @include("admin.home.mostrar")
        <!-- FinBody-->
        
     </div>
</div>
@endsection