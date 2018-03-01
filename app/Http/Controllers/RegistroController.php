<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Estados;
use App\EstadosPaises;
use App\Paises;
use App\Municipios;

class RegistroController extends Controller
{
   public function index()
    {
            return view('modules.form');

    }
    public function buscar_persona($request)
    {
      $request->all();
      //$request=json_decode($request->getContent());
      //$request=get_object_vars($request);

	    if(isset($request["cedula"])){
	        $persona= Persona::cedula($request->get("cedula"))->first();
	    	$result=["status" => "exito", "data" => ["nombre" => $persona->primernombre." ".$persona->segundonombre]];
			    $this->response($this->json($result), 201);

	    }
      return view('modules.frmregistro');
   }
   public function store(Request $request)
   {
      $request->all();
      $estados = Estados::orderby('id_estado')->get();
      $paises = Paises::orderby('codigo')->get();
      //$request=json_decode($request->getContent());
      //$request=get_object_vars($request);

      if(isset($request["cedula"])){
          $persona= Persona::cedula($request->get("cedula"))->first();
          return view('modules.frmregistro')->with('persona',$persona)
                                            ->with('estados',$estados)
                                            ->with('paises',$paises);   
   }}
 
 public function cargamunicipios($idestado){
    $municipios = Municipios::where('id_estado',$idestado)->get();
    foreach ($municipios as $mun) {
      echo '<option value="' .$mun->id_municipio. '">' .$mun->municipio. '</option>';
    }
    return null;
   }
}
