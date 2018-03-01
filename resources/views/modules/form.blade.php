@extends ('modules.cabecera')
@section ('content')			

<div class="container mt-5 mb-5 ">
	<div class="col">
		<div class="row justify-content-center mb-3">
			<h2>Registro</h2>
		</div>
<form name="form1" action="" class="" name="frm" method="post">
				<div class="container_form">
				<div class="col-12">
					<div class="row justify-content-cent">
						<div class="form-group col-12 col-md-3">
							<label for="">Cédula</label>
							<input type="text" name="cedula" id="cedula" maxlength="10" class="form-control" placeholder="...">
							<input type="submit" value="Buscar" class="btn btn-primary m-3 ">
						</div>
						<div class="form-group col-12 col-md-2">
							<label for="">F. Nac</label>
							<input type="text" class="form-control" placeholder="..." readonly="">
						</div>
						<div class="form-group col-6 col-md-1">
							<label for="">Edad</label>
							<input type="text" class="form-control" placeholder="..." readonly>
						</div>
						<div class="form-group col-6 col-md-1">
							<label for="">Sexo</label>
							<input type="text" class="form-control" placeholder="..." readonly=>
						</div>
						<div class="form-group col-12 col-md-5">
							<label for="">Correo Electrónico</label>
							<input type="email" name="email" id="email" maxlength="200" class="form-control" placeholder="..." readonly="">
						</div>
						
					</div>
				</div>
				<div class="col-12">
					<div class="row">
						<div class="form-group col-12 col-md-6">
							<label for="">Nombres</label>
							<input type="text" class="form-control" placeholder="..." readonly="">
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
							<input type="text" class="form-control" placeholder="...">
						</div>
						<div class="form-group col-12 col-md-3">
							<label for="">Estado de Procedencia</label>
							<select name="" id="" class="form-control" readonly>
								<option value="">Seleccione</option>
								<option value="">Estados</option>
							</select>
						</div>
						<div class="form-group col-12 col-md-3">
							<label for="">Municipio de Procedencia</label>
							<select name="" id="" class="form-control" readonly>
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
								<input class="form-check-input" type="checkbox" value="" id="Check1" readonly="">
								  <label class="form-check-label" for="Check1">
								    Hijos
								  </label>
							</div>
							<div class="col">
								<input class="form-check-input" type="checkbox" value="" id="Check2" readonly="">
								  <label class="form-check-label" for="Check2">
								    Padres
								  </label>
							</div>
							<div class="col">
								<input class="form-check-input" type="checkbox" value="" id="Check3" readonly="">
								  <label class="form-check-label" for="Check3">
								    Abuelos
								  </label>
							</div>
							<div class="col">
								<input class="form-check-input" type="checkbox" value="" id="Check4" readonly="">
								  <label class="form-check-label" for="Check4">
								    Pareja
								  </label>
							</div>
							<div class="col">
								<input class="form-check-input" type="checkbox" value="" id="Check5" readonly="">
								  <label class="form-check-label" for="Check5">
								    Otros
								  </label>
							</div>
						</div>
					
					</div>

					<div class="radio   col-12 col-md-4">
						<p class="mb-1">¿Está inscrito en el Registro Electoral? CNE</p>
							<div class=" col" >
								<input class="form-check-input" type="radio" name="exampleRadios" id="Radios1" value="">
								<label class="form-check-label" for="Radios1">
							    Si 
								</label>
							</div>
							<div class=" col" >
								<input class="form-check-input" type="radio" name="exampleRadios" id="Radios2" value="option1" >
								<label class="form-check-label" for="Radios2">
								    No
								</label>
							</div>
					</div>

					<div class="radio col-12 col-md-4">
						<p class="mb-1">¿Está inscrito en el Seguro Social? IVSS</p>
							<div class="col" >
								<input class="form-check-input" type="radio" name="exampleRadio" id="Radios01" value="">
								<label class="form-check-label" for="Radios01">
							    Si 
								</label>
							</div>
							<div class="col" >
								<input class="form-check-input" type="radio" name="exampleRadio" id="Radios02" value="option1">
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
							<select name="" id="" class="form-control">
								<option value="">Seleccione</option>
								<option value="">País</option>
							</select>
						</div>
						<div class="form-group col-12 col-md-6">
							<label for="">Localidad</label>
							<select name="" id="" class="form-control">
								<option value="">Seleccione</option>
								<option value="">Localidad</option>
							</select>
						</div>

						<div class="form-group col-12 col-md-4">
							<label for="">Tiempo de Residencia</label>
							<select name="" id="" class="form-control">
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
									<input class="form-check-input" type="radio" name="exampleRadios" id="Radios3" value="" onclick="habilita()">
									<label class="form-check-label" for="Radios3">
								    Si 
									</label>
								</div>
								<div class=" col" >
									<input class="form-check-input" type="radio" name="exampleRadios" id="Radios4" value="option1" onclick="deshabilita()" >
									<label class="form-check-label" for="Radios4">
									    No
									</label>
								</div>
							</div>
						</div>
						<div class="form-group col-12 col-md-4">
							<label for="">¿Cómo es el servicio en su consulado?</label>
							<select name="consulado" id="consulado" class="form-control" disabled="">
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
			 <input name="_token" value="{{ csrf_token() }}" type="hidden"></input>
  	
				
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
    $ = jQuery;
    jQuery(document).ready(function () {
        $("input#cedula").bind('keydown', function (event) {
          
         if(event.shiftKey)
         {
          event.preventDefault();
        }
        if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 241 )    {
        }
        else {
          if (event.keyCode < 95) {
            if (event.keyCode < 48 || event.keyCode > 57) {
              event.preventDefault();
            }
          } 
          else {
            if (event.keyCode < 96 || event.keyCode > 105) {
              event.preventDefault();
            }
          }
        }        
        ;
      });
               
        $("#form1").submit(function (event) {
            event.preventDefault();
            var data_persona = new Object();
            data_persona.cedula = $('#cedula').val();
            data_referido._token   = $('_token').val();
            var cambio = JSON.stringify(data_referido);

            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

              }

            });
            $.ajax({
                url: "{{ url('buscar_persona')}}",
                dataType: 'json',
                type: "POST",
                data: cambio,
                success: function (data) {
                    console.log(data);
                    if (data.status == 'exito') {
                      //document.location = ira;
                    } else {
                      alert(data.error[0]);
                    }
                },
                error: function (xhr, status) {
                  alert('Disculpe, existió un problema');
                },
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