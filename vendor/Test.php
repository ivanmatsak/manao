<?php
session_start();
include_once "JsonConnector.php";

$jsonConnector = new JsonConnector();
if($jsonConnector->isThisEmailUnique("ivanmatsak1@gmail.com")){
    echo "true";
}else{
    echo "false";
}
echo $jsonConnector->isThisEmailUnique("ivanmatsak1@gmail.com");

