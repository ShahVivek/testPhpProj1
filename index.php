<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
       <div id="Sign-In"> 
        <fieldset style="width:30%">
        <legend>LOG-IN HERE</legend>
        <form method="POST" action="LoginDetails.php">
            User <br><input type="text" name="user" size="40"><br>
            Password <br><input type="password" name="pass" size="40"><br>
            <input id="button" type="submit" name="submit" value="Log-In"> 
        </form>
        </fieldset> 
        </div>-
<?php 
//  	$m=5;
//  	$n=10;
//  	  $sum_of_factorials = calculate_sum_of_factorials ($m, $n);
//  	  echo "The sum of factorials of the entered integers is " . $sum_of_factorials;
//  	
//	    function calculate_sum_of_factorials ($argument1, $argument2) {
//  	 	$factorial1 = calculate_factorial ($argument1);
//  	 	$factorial2 = calculate_factorial ($argument2);
//  	 	$result = calculate_sum ($factorial1, $factorial2);
//  	 	return $result;
//  		}
//	
//	  function calculate_factorial ($argument) {
//  	  	$factorial_result = 1;
//  	 	for ($i=1; $i<=$argument; $i++) {
//  	 		$factorial_result = $factorial_result*$i;
//  	 	}
//  			return $factorial_result;
//  		}
//	  
//	    function calculate_sum ($argument1, $argument2) {
// 			return $argument1 + $argument2;
//     	}	
?>
    
</html>
