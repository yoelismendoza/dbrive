@extends ('modules.cabecera')
@section ('content')			
<?php
$base_url = getenv('APP_URL');
?>
<div class="container mt-5 mb-5 ">
	<div class="col">
		<div class="row justify-content-center mb-3">
			<h2>Registro</h2>
		</div>
<form role="form" action="{{ route('registrar.store') }}" method="POST">
    {{ csrf_field() }}
				<div class="container_form">
				<div class="col-12">
					<div class="row justify-content-cent">
						<div class="form-group col-12 col-md-3">
							<label for="">Cédula</label>
							<input type="text" name="cedula" id="cedula" maxlength="10" class="form-control" value="{{ $persona->cedula }}" readonly>
							
						</div>
						<div class="form-group col-12 col-md-2">
							<label for="">F. Nac</label>
							<input type="text" class="form-control" placeholder="..." readonly="">
						</div>
						<div class="form-group col-6 col-md-1">
							<label for="">Edad</label>
							<input type="text" class="form-control" placeholder="..." readonly="">
						</div>
						<div class="form-group col-6 col-md-1">
							<label for="">Sexo</label>
							<input type="text" class="form-control" placeholder="..." readonly="">
						</div>
						<div class="form-group col-12 col-md-5">
							<label for="">Correo Electrónico</label>
							<input type="email" name="email" id="email" maxlength="200" class="form-control" placeholder="...">
						</div>
						
					</div>
				</div>
				<div class="col-12">
					<div class="row">
						<div class="form-group col-12 col-md-6">
							<label for="">Nombres</label>
							<input type="text" class="form-control" value="{{ $persona->primernombre }}" readonly>
						</div>
						<div class="form-group col-12 col-md-6">
							<label for="">Apellidos</label>
							<input type="text" class="form-control" placeholder="..." readonly="">
						</div>
					</div>
				</div>
				<div class="col-12 ">
					<div class="row">
						<div class="form-group col-12 col-md-6">
							<label for="">Profesión</label>
							<input name="profesion" type="text" class="form-control" placeholder="...">
						</div>
						<div class="form-group col-12 col-md-3">
							<label for="">Estado de Procedencia</label>
							<select name="estado" id="estado" class="form-control">
								<option value="">Seleccione</option>
								@foreach ($estados as $estado)
									<option value="{{ $estado->id_estado }}">{{ $estado->estado }}</option>
								@endforeach
								
							</select>
						</div>
						<div class="form-group col-12 col-md-3">
							<label for="">Municipio de Procedencia</label>
							<select name="municipio" id="municipio" class="form-control">
								<option value="">Seleccione</option>
								<option value="">Municipio</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row pl-4 mt-4">
					<div class="checkbox  col-12 col-md-4">
					
						<p class="mb-1">Carga Familiar en Venezuela</p>
						<div class="row">
							<div class="col" >
								<input class="form-check-input" type="checkbox" value="" id="Check1">
								  <label class="form-check-label" for="Check1">
								    Hijos
								  </label>
							</div>
							<div class="col">
								<input class="form-check-input" type="checkbox" value="" id="Check2">
								  <label class="form-check-label" for="Check2">
								    Padres
								  </label>
							</div>
							<div class="col">
								<input class="form-check-input" type="checkbox" value="" id="Check3">
								  <label class="form-check-label" for="Check3">
								    Abuelos
								  </label>
							</div>
							<div class="col">
								<input class="form-check-input" type="checkbox" value="" id="Check4">
								  <label class="form-check-label" for="Check4">
								    Pareja
								  </label>
							</div>
							<div class="col">
								<input class="form-check-input" type="checkbox" value="" id="Check5">
								  <label class="form-check-label" for="Check5">
								    Otros
								  </label>
							</div>
						</div>
					
					</div>

					<div class="radio   col-12 col-md-4">
						<p class="mb-1">¿Está inscrito en el Registro Electoral? CNE</p>
							<div class=" col" >
								<input class="form-check-input" type="radio" name="cne" id="cne" value="">
								<label class="form-check-label" for="Radios1">
							    Si 
								</label>
							</div>
							<div class=" col" >
								<input class="form-check-input" type="radio" name="cne" id="cne" value="option1" >
								<label class="form-check-label" for="Radios2">
								    No
								</label>
							</div>
					</div>

					<div class="radio col-12 col-md-4">
						<p class="mb-1">¿Está inscrito en el Seguro Social? IVSS</p>
							<div class="col" >
								<input class="form-check-input" type="radio" name="sso" id="sso" value="">
								<label class="form-check-label" for="Radios01">
							    Si 
								</label>
							</div>
							<div class="col" >
								<input class="form-check-input" type="radio" name="sso" id="sso" value="option1">
								<label class="form-check-label" for="Radios02">
								    No
								</label>
							</div>
					</div>

				</div>		

				</div>
				<div class="container_form mt-2">

				<div class="col-12">
					<div class="row justify-content-between">
						<div class="form-group col-12 col-md-6">
							<label for="">País donde reside actualmente</label>
							<select name="pais" id="pais" class="form-control">
								<option value="">Seleccione</option>
						        @foreach ($paises as $pais)
									<option value="{{ $pais->codigo }}">{{ $pais->descripcion }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group col-12 col-md-6">
							<label for="">Localidad</label>
							<select name="localidad" id="localidad" class="form-control">
								<option value="">Seleccione</option>
								<option value="">Localidad</option>
							</select>
						</div>

						<div class="form-group col-12 col-md-4">
							<label for="">Tiempo de Residencia</label>
							<select name="tiempo" id="tiempo" class="form-control">
								<option value="">Seleccione</option>
								<option value="">De 0 a 6 meses</option>
								<option value="">De 6 meses a 1 año</option>
								<option value="">De 1 a 2 años</option>
								<option value="">De 2 a 3 años</option>
								<option value="">De 3 años a más</option>
							</select>
						</div>
						<div class="radio  form-group col-12 col-md-3">
							<p class="mb-1">¿Ha asistido a su consulado?</p>
							<div class="row">
								<div class=" col" >
									<input class="form-check-input" type="radio" name="consulado" id="consulado" value="" onclick="habilita()">
									<label class="form-check-label" for="Radios3">
								    Si 
									</label>
								</div>
								<div class=" col" >
									<input class="form-check-input" type="radio" name="consulado" id="consulado" value="option1" onclick="deshabilita()" >
									<label class="form-check-label" for="Radios4">
									    No
									</label>
								</div>
							</div>
						</div>
						<div class="form-group col-12 col-md-4">
							<label for="">¿Cómo es el servicio en su consulado?</label>
							<select name="servicio" id="servicio" class="form-control" disabled="">
								<option value="">Seleccione</option>
								
								<option value="">Bueno</option>
								<option value="">Regular</option>
								<option value="">Deficiente</option>
								
							</select>
						</div>
					</div>
				</div>
			</div>
				<div class="row justify-content-center">
				
				<input type="submit" value="Registrar" class="btn btn-primary m-3 ">
			</div>
			</form>

			<a href="index.php?action=respuesta">Respuesta</a>

	</div>

</div>
@push ('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script type="text/javascript" language="javascript">
	var ira    = "{{ url('registrop')}}";
    $ = jQuery;
    jQuery(document).ready(function () {
        $("input#email").bind('change', function () {
            var email = $(this).val();
            expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!expr.test(email)) {
                alert("Error: La dirección de correo " + email + " es incorrecta.");
                //document.form1.email.value = "";
            }
            ;
        });
        $("select#estado").bind('click', function (event) {
         var codigo = $(this).val();
          $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

              }

            });
		  $.ajax({
		        type: "GET",
		        url: '{{ url('carga') }}',
		        data: { idestado: $(this).val() , _token: '{{csrf_token()}}' },
		        success: function (data){
                
                    if (data.status == 'exito') {
                    	 console.log(data);
                      $('#municipios').html(resp);
                    } else {
                      alert(data.error[0]);
                    }

		            
		            
		        }
		    });

      });
});
     
               
</script>


	<script>
	function habilita(){
		document.frm.consulado.disabled = false;
	}
 
	function deshabilita(){
		document.frm.consulado.disabled = true;
		document.frm.consulado.value = "";
	}
</script>
@endpush 
@stop