<?php 
try{
	$conn = new PDO('mysql:host=localhost;dbname=charaters','root', 'mysql');

}
catch(PDOException $e){
print "Error!: " . $e->getMessage() . "<br/>";
die();
 }
 ?>
