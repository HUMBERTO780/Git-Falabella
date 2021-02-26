		<?php

		class printit{

			private $At;

			public static function print0($i){

					switch ($i) {

		                case ($i%3==0 && $i%5==0):
					    $At= 'Integraciones';
					    return $At;
					    break;
					
				        case ($i%3==0):
					    $At= 'Falabella';
					    return $At;
					    break;
				
				        case ($i%5==0):
					    $At= 	'IT';
					    return $At;
					    break;

					}

			}



		}
		
		


		class program{

			private $program;
			

			public static function count($a){


				for ($i=1;$i<=$a;$i++){

					$program[]=array('Numero'=> $i,'Asignacion'=> printit::print0($i)) ;

				}

				return $program;

			}


		}


		if (program::count(100)<>NULL){
		print_r(program::count(100));
	    }





		
		
			

            
			/* function print($i){


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

		

		    function program(){


					for ($i=1;$i<=100;$i++){

						$program[]=array('Numero'=> $i,'Asignacion'=> print($i)) ;

					}

					return $program;

			}



			if (program()<>NULL){
				print_r(program());
			}
			*/






		


	    /*for ($i=1;$i<=100;$i++){      /// LOGIC
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