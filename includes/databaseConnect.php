<?php

//MAMP
$dbhost = 'localhost';
$dbuser = 'CharlieHyde';
$dbpwd  = 'BHPS1833';
$dbname = 'PrintAPresident';  //'<your MAMP database name>';




//testing
//$dbhost = 'toriroessler.com';
//$dbuser = 'CharlieHyde';
//$dbpwd  = 'BHPS1833';
//$dbname = 'PrintAPresident';  //'<your MAMP database name>';


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

?>