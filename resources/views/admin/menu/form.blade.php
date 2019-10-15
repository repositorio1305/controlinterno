<div class="form-group row">
    <label for="nombre" class="col-lg-3 control-label requerido">Nombre</label>
    <div class="col-lg-8">
      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" value="{{old('nombre')}}" required >
    </div>
</div>

<div class="form-group row">
    <label for="url" class="col-lg-3 control-label requerido">Url</label>
    <div class="col-lg-8">
      <input type="text" name="url" class="form-control" id="url" placeholder="Url" value="{{old('url')}}" required>
    </div>
</div>

<div class="form-group row">
    <label for="icono" class="col-lg-3 control-label">Icono</label>
    <div class="col-lg-8">
      <input type="text" name="icono" class="form-control" id="icono" placeholder="icono" value="{{old('icono')}}">
    </div>
    <div class="col-lg-1">
        <span class="fa fa-fw {{old('icono')}}" id="mostra-icono"></span>
      </div>
</div>
 