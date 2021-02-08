		<?php
		 

			 function imprimir($i){


					switch ($i) {

		                case ($i%3==0 && $i%5==0):
					    return  'Integraciones';
					    break;
					
				        case ($i%3==0):
					    return  'Falabella';
					    break;
				
				        case ($i%5==0):
					    return 'IT';
					    break;

					}

			}

		

		    function programa(){


					for ($i=1;$i<=100;$i++){

						$programa[]=array('Numero'=> $i,'Asignacion'=> imprimir($i)) ;

					}

					return $programa;

			}



			if (programa()<>NULL){
				print_r(programa());
			}
			






		


	    /*for ($i=1;$i<=100;$i++){      /// LOGICA DEL EJERCICIO
		echo$i;

		    if ($i%3==0 || $i%5==0 || $i%3==0 && $i%5==0){

			    switch ($i) {

		        case ($i%3==0 && $i%5==0):
					echo 'Integraciones';
					break;
					
				case ($i%3==0):
					echo 'Falabella';
					break;
				
				case ($i%5==0):
					echo 'IT';
					break;

				

			    }

		    }

		}*/

		?>