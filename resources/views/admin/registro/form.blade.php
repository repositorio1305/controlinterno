

            <div class="row">
              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  <label>Primer Nombre</label>
                  <input type="text" class="form-control validarChar" placeholder="Primer nombre" id="nombre_emp" name="nombre_emp" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Segundo Nombre</label>
                  <input type="text" class="form-control validarChar" placeholder="Segundo nombre" id="nombre_s" name="nombre_s" required>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Primer Apellido</label>
                        <input type="text" class="form-control validarChar" placeholder="Cedula" id="apellido_emp" name="apellido_emp" required>
                    </div>
                </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Segundo Apellido</label>
                    <input type="text" class="form-control validarChar" placeholder="Segundo apellido" id="apellido_s" name="apellido_s" >
                </div>
            </div>
            </div>


            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Cedula</label>
                        <input type="text" class="form-control validarNumb" placeholder="Cedula" id="ci_emp" name="ci_emp" required>
                    </div>
                </div>

            <div class="col-sm-6">
                <!-- select -->
                <div class="form-group">
                  <label>Carg{{$count=0}}</label>
                  <select class="form-control" id="empleados_id_cargos" name="empleados_id_cargos" required>
                    <option id="{{$data='Id_cargo_'.$count++}}"> </option>
                    @foreach ($cargos as $cargo)
                    <option id="{{$data='Id_cargo_'.$count++}}">{{$cargo->cargo}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
