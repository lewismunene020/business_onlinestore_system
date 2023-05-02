<?php 

$pass = $_GET['pass'];

if (isset($pass)){
    echo md5($pass);
} else {
    echo "Password is not set";
}

