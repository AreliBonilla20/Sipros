@extends('layout')

@section('content')
<div class="breadcomb-area" >
		<div class="container" >
			<div class="row" >
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-form"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Registro de expediente</h2>
										<p>Ingrese los datos del estudiante</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Expediente</h2>
                            <p>Complete los campos del formulario</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-example-wrap">
                                    <form action="{{route('guardar_expediente')}}" method="POST" >
                                    @csrf
                                       
                                    <label for="carne">Carnet <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="carne" placeholder="AA#####" pattern="^[A-Z]{2}[0-9]{5}$">
                                            @foreach ($errors->get('carne') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>

                                    <label for="nombres">Nombres <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="nombres" placeholder="Nombres del estudiante" pattern="[A-Za-záéíóúñÁÉÍÓÚ\'\s]{1,50}">
                                            @foreach ($errors->get('nombres') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>
                                  
                                    <label for="apellidos">Apellidos <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="apellidos" placeholder="Apellidos del estudiante" pattern="[A-Za-záéíóúñÁÉÍÓÚ\'\s]{1,50}">
                                            @foreach ($errors->get('apellidos') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>
                                
                                    <label for="edad">Edad <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="number" class="form-control" min="15" max="90" name="edad" placeholder="Edad del estudiante">
                                            @foreach ($errors->get('edad') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>

                                    <label for="sexo_id" >Género <small style="color:#16D195;" >*</small></label>
                                    <div class="form-example-int mg-t-15">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker" name="sexo_id">
                                                    <option value="">-Seleccione un género-</option>
                                                    @foreach($sexos as $sexo)
                                                    <option value="{{$sexo->id}}">{{$sexo->sexo}}</option>
                                                    @endforeach
                                            </select>
                                            @foreach ($errors->get('sexo_id') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                        </div> 
                                    </div>
                                    <br><br><br>
                                    
                                    <label for="codigo">Carrera <small style="color:#16D195;" >*</small></label>
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                        
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker" name="codigo">
                                                    <option value="">-Seleccione una carrera-</option>
                                                    @foreach($carreras as $carrera)
                                                    <option value="{{$carrera->codigo}}">{{$carrera->codigo}}-{{$carrera->nombre_carrera}}</option>
                                                    @endforeach
                                            </select>
                                            @foreach ($errors->get('codigo') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                        </div>
                                    
                                    </div>
                                    <br><br><br>


                                    <label for="dui">DUI</label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="dui" placeholder="00000000-0", pattern="^[0-9]{8}-[0-9]{1}">
                                            @foreach ($errors->get('dui') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>

                                    <label>Dirección <small style="color:#16D195;" >*</small></label>
                                    <div class="form-example-int mg-t-15">

                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker" data-live-search="true" name="departamento_id" id="departamento_id" >
                                                        <option value="">-Seleccione un departamento-</option>
                                                        @foreach ($departamentos as $departamento)
                                                            <option value="{{$departamento->id}}">{{$departamento->nombre_departamento}}</option>
                                                        @endforeach
                                                    </select>
                                                    @foreach ($errors->get('departamento_id') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                    @endforeach
                                                    
                                                </div>
                                            </div>
    
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker" data-live-search="true" name="municipio_id" id="municipio_id" >
                                                        <option value="">-Seleccione un municipio-</option>
                                                        {{-- @foreach ($municipios as $municipio)
                                                            <option value="{{$municipio->id}}">{{$municipio->nombre_municipio}}</option>
                                                        @endforeach --}}
                                                    </select>
                                                    @foreach ($errors->get('municipio_id') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <br><br><br>

                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                <i class="notika-icon notika-house"></i>
                                                </div>
                                                <div class="nk-int-st">
                                                <input type="text" class="form-control" name="direccion" placeholder="Dirección del estudiante"
                                                pattern="[A-Za-záéíóúñÁÉÍÓÚ\'\s]{1,50}">
                                                @foreach ($errors->get('direccion') as $mensaje)
                                                <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <label for="telefono">Teléfono <small style="color:#16D195;" >*</small></label>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-phone"></i>
                                            </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="telefono" placeholder="0000-0000">
                                            @foreach ($errors->get('telefono') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                        </div>
    
                                        <label for="email">Correo electrónico <small style="color:#16D195;" >*</small></label>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-mail"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" name="email" placeholder="Correo electrónico del estudiante" pattern="/^(.+\@.+\..+)$/;">
                                                @foreach ($errors->get('email') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                            </div>
                                        </div>

                                    
                                        <label for="area">Área de interés <small style="color:#16D195;" >*</small></label>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-support"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" name="area" placeholder="Área de interés del estudiante">
                                                @foreach ($errors->get('area') as $mensaje)
                                                <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                            </div>
                                        </div>

                                        <br>

                                        <div class="form-example-int mg-t-15">
                                            <button class="btn btn-success notika-btn-success">Guardar expediente</button>
                                            <a class="btn btn-danger notika-btn-danger" href="{{route('expedientes')}}">Cancelar</a>
                                        </div>
 
                                    </div>
                                    </form>
                                   
                                </div>
                            </div>
                        </div>
                    
                     
                </div>
            </div>
       
        
        </div>
    </div>
@endsection