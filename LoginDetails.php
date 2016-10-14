<?php

$ID = $_POST['user'];
$Password = $_POST['pass'];
//echo phpinfo();
function SignIn() {
    if (!empty($_POST['user'])) {
        if($_POST['user'] == "floridaproto"){
            $intValue = 5;
            $intValue = $intValue + 10 ;
            echo $_POST['user'];
            echo '</br>Login success';
        }
        else {
            echo $_POST['user'];
            echo '</br>Login fail';
        }
    } else {
        echo "in else";
    }
}

if (isset($_POST['submit'])) {
    SignIn();
}