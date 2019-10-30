<?php



include 'db.php';




    // Process signup submission
    $db = dbconnect($hostname,$db_name,$db_user,$db_passwd);

    mysql_close($db);
    
    if ($db) {
    $username  = $_POST['username'];
    $email    = $_POST['email'];
    $password   = $_POST['password'];
    $password_corfirmed= $_POST['password-confirmed'];
    $password_final= substr(md5($_POST['password']),0,32);
    $queryemail =" SELECT * from users where email='$email'";

    if(!($result= @ mysql_query($queryemail,$db))){
        showerror();
    }
    $nrows  = mysql_num_rows($result);
    print_r($nrows);
    if ($nrows>0) {
        $ErrorNumber=1;
        header("Location: register.php?Error=$ErrorNumberN&username=$username");
    }

    elseif ($password!=$password_corfirmed) {
      $ErrorNumber=4; 
      header("Location: register.php?Error=$ErrorNumber&username=$username&email=$email");
    }

    elseif (empty($password) || empty($password_corfirmed)) {
        $ErrorNumber=3;
      header("Location: register.php?Error=$ErrorNumber&Email=$Email&username=$username"); 
    }

    elseif (empty($password) && empty($password_corfirmed) && empty($username) && empty(email)) {
       $ErrorNumber=0;
       header("Location: register.php?Error=$ErrorNumber");
    }
    else{
        $sql_insert = "INSERT INTO users(name, email, password_digest, created_at, updated_at,) VALUES('$username','$email','$password_final',NOW(),NOW())";
        $ins= @ mysql_query($sql_insert,$db); 
        header("Location: register_success.html");
        }
    }



?>