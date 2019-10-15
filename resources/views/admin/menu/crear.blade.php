@extends("theme.$theme.layout")
@section("titulo")
Sistema de Menus
@endsection
@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/Javascript"></script>
@endsection

@section("contenido")
<div class="row">
     <div class="col-lg-12">
         @include('includes.form-error')
         @include('includes.mensaje')
     <div class="card card-danger">
        <!-- InicioHeader-->
            <div class="card-header">
                <h3 class="card-title">Menu</h3>
          </div>
        <!-- FinHeader-->
        <!-- InicioBody-->
        <form action="{{route('guardar_menu')}}" id="form_general" class="form-horizontal" method="POST">
           @csrf
        <div class="card-body">
                @include("admin.menu.form")
        </div>
        <!-- FinBody-->
        <!-- InicioFooter-->
        <div class="card-footer">
               @include("includes.boton-form-crear")
        </div>
        <!-- FinFooter-->
        </form>
     </div>
</div>
@endsection