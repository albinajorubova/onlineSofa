<?php
$mysqli = new mysqli('localhost', 'root', '', 'gesignShop');


$product_name = $_GET['product_name'];
$price = $_GET['price'];
$quantity = $_GET['quantity'];
$img = $_GET['img'];

$mysqli->query("INSERT INTO `product` (`product_name`, `price`, `quantity`, `img`) 
VALUES ('$product_name', '$price', '$quantity', '$img')");

header("Location:http://localhost/3-IS1/onlainSofa/");