<?php
    //require '../php/connect.php';

    //session_start();

    $std = $con->query("SELECT * FROM moderator WHERE username = 'AdminMod'");

    if ($std->num_rows > 0){
        //$admin = $std->fetch_assoc();
        //$_SESSION['id'] = $admin["id"];
        //$_SESSION['username'] = $admin["username"];
        //$_SESSION['name'] = $admin["name"];
        //$_SESSION['type'] = 'moderator';

        //header("Location: ../moderator/index.php");
    }
    else{
        $password = $con->real_escape_string(password_hash("admin", PASSWORD_BCRYPT));
        $sql = "INSERT INTO moderator(username, password, name) VALUES('AdminMod', '$password', 'Admin Moderator')";
        $con->query($sql);

        //header("Location: adminModerator.php");
    }

?>