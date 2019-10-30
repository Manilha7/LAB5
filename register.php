<?php

// put full path to Smarty.class.php
require_once('/usr/share/php/smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';
$smarty->cache_dir = 'cache';
$smarty->config_dir = 'configs';

function errorMensage($ErrorNumber){
    if ($ErrorNumber==0) {
        
    }
}	
	
	
    if (isset($_GET['Error'])) {
    	print_r($_GET);
		$username=$_GET['username'];
     	$email=$_GET['email'];
	}	


	$smarty ->assign("ErrorNumber",$_GET['Error']);
	$smarty ->assign("username","$username");
	$smarty ->assign("email","$email");

    $smarty->assign("MENU_1","Home");
    $smarty->assign("MENU_2","Register");
    $smarty->assign("MENU_3","Login");
    $smarty->display('register_template.tpl');
    $smarty->assign("MENU_3","Login");


?>
