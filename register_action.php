<?php

include("db.php");

print_r ($_REQUEST);

/*if(!isset($_POST['submitok'])) {
    // Display the user signup form
    header("Location: register.php");
}
else {
    // Process signup submission
    $db = dbconnect($hostname,$db_name,$db_user,$db_passwd);

    if( $_POST['name']    == '' or
        $_POST['email']  == '' or
        $_POST['password'] == '' ) {
        header("Location: register.php?m=1");
        exit;
    }



    // Check for existing user with the new id
    $query = "SELECT * FROM users WHERE userid = '" .$_POST[newid] ."'";
    $result = @ mysql_query($query,$db);
    if(!$result)
        showerror();

    if(mysql_num_rows($result) > 0) {
        header("Location: register.php?m=2");
        exit;
    }


    $userid  = $_POST["username"];
    $email    = $_POST["email"];
    $password   = $_POST["password"];
    $password_corfirmed= $_POST["password-confirmed"];
    $password_final= substr(md5($_POST['password']),0,32)
    $present_date = date("Y-m-d H:i:s");

    $sql_insert = "INSERT INTO users(name, email, created_at, updated_at, password_digest)
                 VALUES('$userid','$email','$present_date','$present_date','$password_final')";
        $result=mysql_query($db,$sql_insert);
    if(!$result)
        showerror();
    else
    {
        header("Location: register_sucess.html");
    }
    // Close database
    mysql_close($db);



}*/
?>