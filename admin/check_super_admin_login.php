<?php  

session_start();

// if(!isset($_SESSION['level']) || $_SESSION['level'] !== 1)

//isset: ktra xem có tồn tại hay không
//empty: ktra xem có khác 0 không

if(empty($_SESSION['level'])){
	header('location:../index.php');
}