<?php
//Assign database details to variables
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'oranges11');
define('DBNAME', 'atomlogin');

//Setup database connection
$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

//Check if connection was successful
if(!$conn){
    die("<span style='color:red;'>Error connecting to database</span>");
}else{
    echo "connected successfully";
}

session_start(); //Run session

/*********************************************/
  //Check to see if user is logged in (active session or cookie)
function logged_in(){
  //check if user is logged in - session or cookie is set
  if(isset($_SESSION['email']) || isset($_COOKIE['email'])){
    return true;
  }else{
    return false;
  }
}
/*********************************************/
