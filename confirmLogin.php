
<?php

    $host="sulley.cah.ucf.edu"; // Host name 
    $username="as932055"; // Mysql username 
    $password="01knights!"; // Mysql password 
    $db_name="as932055"; // Database name 
    $tbl_name="Directory"; // Table name

    mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
    mysql_select_db("$db_name")or die("cannot select DB");
    
    session_start();

    $userQuery = $_GET['userQuery'];
    $passwordQuery = $_GET['passwordQuery'];
    $_SESSION['username'] = $userQuery;
    $_SESSION['password'] = $passwordQuery;
    
    $sql="SELECT username, password FROM $tbl_name WHERE username='$userQuery'";
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result))
    {
        if($userQuery==$row[0] && $passwordQuery==$row[1] && $userQuery=="Admin")
        { echo "Login successful";
          header("Location: admin.php");
        }
        else if($userQuery==$row[0] && $passwordQuery==$row[1] && $userQuery!="Admin")
        { echo "Login successful";
          header("Location: client.php");
        }
    }

    $sql2="SELECT username FROM $tbl_name";
    $result2 = mysql_query($sql2);
    $row2 = mysql_fetch_array($result2);

        if($userQuery!=$row2)
        { 
            echo "<script type='text/javascript'>alert('Login Failed');</script>";
            echo "<script type='text/javascript'>window.location=\"home.php\";</script>";
        }
    
    
    ?>