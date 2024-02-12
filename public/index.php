<?php
require_once("./../config.php");
if(isset($_GET["p"])){
    $p = $_GET["p"];
}else{
    $p = "home";
}
$fichier = scandir($template);
var_dump($fichier);
ob_start();
foreach($fichier as $file){
    if($file === "." || $file === ".." || $file === "base.php"){
        continue;
    }else{
        $page = explode("." , $file);

    }
    if($p === $page[0]){
        require($template.$file);
    }
}
$element = ob_get_clean();
require($template."base.php");