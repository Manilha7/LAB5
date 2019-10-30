<?php

// put full path to Smarty.class.php
require_once('/usr/share/php/smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';

function errorMensage($ErrorNumber){
    if ($ErrorNumber==0) {
        
    }
}	
	
	if (isset($_POST['ErrorNumber'])) {
		$username=$_SESSION['username'];
     	$email=$_SESSION['email'];
	}
	$smarty ->assign("ErrorNumber",$_POST['ErrorNumber']);
	$smarty ->assign("username","$username");
	$smarty ->assign("email","$email");
	$smarty ->assign("password","");
	$smarty ->assign("password-confirmed","");
    $smarty->assign("MENU_1","Home");
    $smarty->assign("MENU_2","Register");
    $smarty->assign("MENU_3","Login");
    $smarty->display('register_template.tpl');
    $smarty->assign("MENU_3","Login");
?>
