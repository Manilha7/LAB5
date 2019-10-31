<?php

// put full path to Smarty.class.php
require_once('/usr/share/php/smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';
$MensageError=errorMensage($_GET['$Error']);
function errorMensage($Error){
    if ($Error==0) {
        $MessageError= "Todos os campos devem ser preenchidos";
    }
    elseif ($Error==1) {
    	 $MessageError=  "Email já existe na base de dados";
    }
    elseif ($Error==2) {
    	$MessageError= "Email tem formato incorrecto";
    }
    elseif ($Error==3) {
    	$MessageError= "Password em branco";
    }
    elseif ($Error==4) {
    	$MessageError="Passwords não coincidem";
    }
    else
    	return 0;
    return $MessageError;
}	
	
	
    if (isset($_GET['Error'])) {
		$username=$_GET['username'];
     	$email=$_GET['email'];
	}	


	$smarty->assign("Error",$_GET['Error']);
	$smarty->assign("username",$username);
	$smarty->assign("email",$email);
	$smarty->assign("MessageError",$MessageError);
    $smarty->assign("MENU_1","Home");
    $smarty->assign("MENU_2","Register");
    $smarty->assign("MENU_3","Login");
    $smarty->display('register_template.tpl');
    $smarty->assign("MENU_3","Login");


?>
