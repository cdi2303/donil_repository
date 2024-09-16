<?php
$requestUri = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$path = explode('/', trim($requestUri, '/'));

if(strpos("localhost",$requestUri) > 0){
    $dev_mode=true;
}

if(isset($path[1])){
    $method = $path[1];
}else{
    $method = 'view';
}

if($method){
//    include_once
    var_dump($method);
}