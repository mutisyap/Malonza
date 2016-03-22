<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 3/22/2016
 * Time: 8:55 AM
 */
$servername="localhost";
$username = "username";
$password = "password";
$dbname="";

//create the connection
$connection=new mysqli($servername, $username, $password, $dbname);

//verify the connection
if ($connection->connect_errno){
    die("Connection Failed: ". $connection->connect_error);
}
