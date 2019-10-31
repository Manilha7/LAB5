<?php



include 'db.php';




    // Process signup submission
    $db = dbconnect($hostname,$db_name,$db_user,$db_passwd);


    if ($db) {
    $username  = $_POST['username'];
    $email    = $_POST['email'];
    $password   = $_POST['password'];
    $password_corfirmed= $_POST['password-confirmed'];
    $password_final= substr(md5($_POST['password']),0,32);
    $queryemail =" SELECT * from users where email='$email'";

    
    $nrows  = mysql_num_rows($result);
    if ($nrows>0) {
        header("Location: register.php?Error=1&username=$username");
    }

    elseif ($password!=$password_corfirmed) {
      $Error=4; 
      header("Location: register.php?Error=$Error&username=$username&email=$email");
    }

    elseif (empty($password) || empty($password_corfirmed)) {
        $Error=3;
      header("Location: register.php?Error=$Error&email=$email&username=$username"); 
    }

    elseif (empty($password) && empty($password_corfirmed) && empty($username) && empty(email)) {
       $Error=0;
       header("Location: register.php?Error=$Error");
    }
    else{
        $sql_insert = "INSERT INTO users(name, email, password_digest, created_at, updated_at) VALUES('$username','$email','$password_final',NOW(),NOW())";
        if(!($result = @ mysql_query($sql_insert,$db)))
   			showerror(); 
        header("Location: register_success.html");
        }
    }

?>