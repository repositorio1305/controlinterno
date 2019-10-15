

            <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nombre del proyecto</label>
                        <input type="text" class="form-control validarChar" placeholder="Primer nombre" id="nombre_proyecto" name="nombre_proyecto" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Fecha de inicio</label>
                              <div class="input-group">
                              <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="far fa-calendar-alt"></i>
                                    </span>
                                  </div>
                                    <input type="text" class="form-control " value="{{$fechaActual}}" id="fecha_inicio" name="fecha_inicio" required>
                            </div>
                        </div>
                          </div>
                  </div>
                  <div class="row">
                        <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Fecha de finalización</label>
                                  <div class="input-group">
                                  <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="far fa-calendar-alt"></i>
                                        </span>
                                      </div>
                                        <input type="text" class="form-control " value="{{$fechaActual}}" id="fecha_fin" name="fecha_fin" required>
                                </div>
                            </div>
                              </div>
                      <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                              <label>Lenguaje de programación</label>
                              <select class="form-control" id="proyectos_id_lenguajes" name="proyectos_id_lenguajes" required>
                                <option class="{{$count=0}}" id="{{'Id_Lenguaje_'.$count++}}">1</option>
                                @foreach ($leng as $lenguaje)
                                <option id="{{$data='Id_Lenguaje_'.$count++}}">{{$lenguaje->nombre_lenguaje}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                  </div>
      
      
                  <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label>Estatus</label>
                              <input type="text" class="form-control validarNumb" placeholder="En progreso" value="En progreso" id="estatus" name="estatus">
                          </div>
                      </div>
                      <div class="col-sm-6">
                            <div class="form-group">
                                    <label>Descripción</label>
                                    <textarea class="form-control" rows="1" placeholder="Enter ..." id="descripcion" name="descripcion"></textarea>
                                  </div>
                        </div>
                  </div>
      