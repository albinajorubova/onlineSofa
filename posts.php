<?php
include('index.php');
$mysqli = new mysqli('localhost', 'root', '', 'gesignShop');
$posts = $mysqli->query("SELECT * FROM `product`");

