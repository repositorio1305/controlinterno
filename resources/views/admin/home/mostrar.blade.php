<div class="row d-flex align-items-stretch">
@foreach ($empleados as $empleado)
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
    <div class="card bg-light">
      <div class="card-header text-muted border-bottom-0">
        Estrategia digital
      </div>
      <div class="card-body pt-0">
        <div class="row">
                    <div class="col-7">
                    <h2 class="lead"><b>{{$empleado->nombre_emp." ".$empleado->nombre_s." ".$empleado->apellido_emp}}</b></h2>
                    <p class="text-muted text-sm cargo">{{$empleado->empleados_id_cargos}}</p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                    </ul>
                  </div>
                    <div class="col-5 text-center">
                          <img src="{{asset("assets/$theme/dist/img/user1-128x128.jpg")}}" alt="" class="img-circle img-fluid">
                    </div>
        </div>
                    <div class="card-footer">
                      <div class="text-right">
                        <a href="#" class="btn btn-sm btn-primary">
                          <i class="fas fa-user"></i> Ver Perfil
                        </a>
                      </div>
                    </div>
                  
            </div>
    </div>
  </div>
    @endforeach
</div>