

            <div class="row">
                <div class="col-sm-6">
                    <!-- select -->
                    <div class="form-group">
                      <label>Empleado</label>
                      <select class="form-control" id="proyectos_id_lenguajes" name="proyectos_id_lenguajes" required>
                        <option class="{{$count=0}}" id="{{'Id_Lenguaje_'.$count++}}"></option>
                        @foreach ($emp as $empleado)
                        <option id="{{$data='Id_Lenguaje_'.$count++}}">{{$empleado->id.' - '.$empleado->nombre_emp.$empleado->apellido_emp}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                          <label>Proyecto</label>
                          <select class="form-control" id="proyectos_id_lenguajes" name="proyectos_id_lenguajes" required>
                            <option class="{{$count=0}}" id="{{'Id_Lenguaje_'.$count++}}"></option>
                            @foreach ($pro as $proyecto)
                            <option id="{{$data='Id_Lenguaje_'.$count++}}">{{$proyecto->id.' - '.$proyecto->nombre_proyecto}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                  </div>
