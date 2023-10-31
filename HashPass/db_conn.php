<?php
//Attempt MySQL server connection. Assuming you are running MySQL wih default setting (user 'root' with no password).
$con = mysqli_connect("localhost","root","","hashing_password");

//Check connection
if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>