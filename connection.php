<?php
session_start();
$con=mysqli_connect("localhost","root","","gla");
function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	}
}
?>