<?php 

	class EnlacesModels{
		public function enlacesModel($enlaces){

			if ($enlaces == "login" ||
				$enlaces == "inicio" ){

				$module= "views/modules/".$enlaces.".php";

			}elseif ($enlaces == "index") {
				
				$module= "views/modules/login.php";

			}else{

				$module= "views/modules/login.php";
			}
			return $module;

		}
	}