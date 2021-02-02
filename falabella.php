<?php

for ($i=1;$i<=100;$i++){
echo$i;

    if ($i%3==0 || $i%5==0 || $i%3==0 && $i%5==0){

	    switch ($i) {

        case ($i%3==0 && $i%5==0):
			echo 'integraciones';
			break;
			
		case ($i%3==0):
			echo 'Falabella';
			break;
		
		case ($i%5==0):
			echo 'IT';
			break;

		

	    }
	
    }

}

?>