<?php

//MAMP
//$dbhost = 'localhost';
//$dbuser = 'root';
//$dbpwd  = 'root';
//$dbname = 'PAP';  //'<your MAMP database name>';$dbhost = 'localhost';


//XAMPP
$dbhost = 'localhost';
$dbuser = 'root';
$dbpwd  = '';
$dbname = 'pap';  //'<rob's localhost db... lowercase>';

$conn = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

if (!$conn) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}

// SERVERRRRRRRRRRR
//$dbhost = 'localhost';
//$dbuser = 'troessle';
//$dbpwd  = 'troessle';
//$dbname = 'troessle_db';

//$conn = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
//if (!$conn) {
//   die('Connect Error (' . mysqli_connect_errno() . ') '
//       . mysqli_connect_error());
//}