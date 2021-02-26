<?php
 
use PHPUnit\Framework\TestCase;
include ('Main/falabella.php');
final class Test extends TestCase{


	public  function test1() : void
	{

	$this-> assertEquals(

	'Falabella',
	printit::print0(3)
	);

	}

}


?>