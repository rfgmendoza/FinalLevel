
<?php

    $host="sulley.cah.ucf.edu"; // Host name 
    $username="as932055"; // Mysql username 
    $password="01knights!"; // Mysql password 
    $db_name="as932055"; // Database name 
    $tbl_name="Directory"; // Table name

    mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
    mysql_select_db("$db_name")or die("cannot select DB");

    $userQuery = $_GET['userQuery'];
    $passwordQuery = $_GET['passwordQuery'];
    
    $sql="SELECT username, password, access_level FROM $tbl_name WHERE username='$userQuery'";
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result))
    {
        session_start();
        $_SESSION['username'] = $row[0];
        $_SESSION['password'] = $row[1];
        if($userQuery==$row[0] && $passwordQuery==$row[1])
        { 
            if ($row[2]==2){
                echo "Login successful";
                header("Location: userLog.php");
            }
            else if ($row[2]==3){
                echo "Login successful";
                header("Location: admin.php");
            }
        }
    }
    
    ?>