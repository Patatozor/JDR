<?php
include_once('../libs/traitement_string.php');
include_once('../config/environnement.php');

$module = (isset($_GET['module']))?$_GET['module']:'accueil';
$action = (isset($_GET['action']))?$_GET['action']:'home';
$url = 'controller/'.$module.'/'.$action.'.php';
if(file_exists($url)){
    include_once($url);
}else{
    include_once('view/404.php');
}