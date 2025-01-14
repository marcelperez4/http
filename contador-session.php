<?php
session_start(); //start session
$num=0;
if(isset($_SESSION['num'])){
    $num=$_SESSION['num'];
}
$_SESSION['num']=++$num;
echo $num;
?>
