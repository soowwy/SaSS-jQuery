<?php

session_start();
/*
    if (isset($_POST['name'])) {
        $_SESSION['name'] = $_POST['name'];
    };
    if (isset($_POST['quantity'])) {
        $_SESSION['quantity'] = $_POST['quantity'];
    };
    if (isset($_POST['price'])) {
        $_SESSION['price'] = $_POST['price'];
    };

    echo json_encode($_SESSION);
*/
if(empty( $_SESSION['data'] )) {
    $_SESSION['data'] = array();
}
$name = $_POST['name'];
$quantity = $_POST['name'];
$price = $_POST['price'];

$output_string = array('name'=>$name,'quantity'=>$quantity,'price'=>$price);

array_push($_SESSION['data'] , $output_string );

json_encode($_SESSION['data']);