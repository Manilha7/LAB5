<?php

include 'db.inc';

//
//   obtain form data
//
$nome = $_POST["nome"];
$email = $_POST["email"];
$password = $_POST["password"];
$passwordconfirmed = $_POST["passwordconfirmed"];

//
// ligacao a base de dados
//
$db = dbconnect($connection_string);
if($db) {
    // criar a instrucao de SQL para inserir o tuplo
    $tuplo = "('$nome', $email, $password, $passwordconfirmed)";
    $sql_stmt  = "INSERT INTO baseLab4 VALUES $tuplo";

    // executar a instrucao
    if( @pg_query($db, $sql_stmt ))
        $querystring = "Location: register_sucess.html?status=T&tuple=" . urlencode($tuplo);
    else
        $querystring = "Location: resultado.php?status=F";
    header($querystring);

    $smarty->assign("MENU_1","Home");
    $smarty->assign("MENU_2","Register");
    $smarty->assign("MENU_3","Login");
}
?>
