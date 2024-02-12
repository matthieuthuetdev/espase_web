<?php
$file = file_get_contents("./../data.json");
$json = json_decode($file , true);
$template = "./../template/";