<?php
 
use PHPUnit\Framework\TestCase;
include ('falabella.php');
final class Test extends TestCase{


	public  function test1() : void
	{

	$this-> assertEquals(

	'Falabella',
	imprimir(3)
	);

	}

}


?>