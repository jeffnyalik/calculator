<?php
class Calculate 
{
	function add($a, $b) {
		echo '<strong>Total Sum: </strong>'  .($a+$b) .'<br>';
	}

	function sub($a, $b) {
		echo '<strong>Subtraction: </strong>' .($a-$b).'<br>';
	}

	function mult($a, $b) {
		echo '<strong>Multiplication:</strong> ' .($a*$b).'<br>';
	}

	function div($a, $b) {
		echo '<strong>Division: </strong>'. ($a/$b) .'<br>';
	}
}