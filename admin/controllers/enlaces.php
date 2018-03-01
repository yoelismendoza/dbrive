<?php 

	class Enlaces{
		public function enlacesControllers(){

			if (isset($_GET["action"])) {
				
				$enlaces= $_GET["action"];
			}else{
				$enlaces= "index";
			}

			$respuesta = EnlacesModels::enlacesModel($enlaces);
			
			include $respuesta;
		}
	}