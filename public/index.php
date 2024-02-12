<?php
require_once("./../config.php");
if(isset($_GET["p"])){
    $p = $_GET["p"];
}else{
    $p = "home";
}