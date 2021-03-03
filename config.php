<?php
/**
 * using mysqli_connect for database connection
 */
/*$databaseHost = 'remotemysql.com';
$databaseName = 'GuFz4QOsys';
$databaseUsername = 'GuFz4QOsys';
$databasePassword = 'LchV84T4d5';*/
$databaseHost = 'localhost';
$databaseName = 'arkademy';
$databaseUsername = 'root';
$databasePassword = '';
 
//$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
$mysqli = new mysqli($databaseHost,$databaseUsername,$databasePassword,$databaseName);
 
?>