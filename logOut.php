<?php
include('ConnectionData.php');

session_start();
if(session_destroy()){
header("location :LoginScreen.php");
}
?>