<?php
//Assign database details to variables
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'oranges11');
define('DBNAME', 'atomtheme');

//Setup database connection
$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

//Check if connection was successful
if(!$conn){
    die("<span style='color:red;'>Error connecting to database</span>");
}else{
    //echo "connected successfully";
}

session_start(); //Run session

/*********************************************/

/*********************************************/
