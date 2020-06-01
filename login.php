<?php

if ($_POST["username"]){
    //login
    $username = $_POST["username"];
    $password = $_POST["password"];
//    if success
//    view something
//    else
//    can't see anything
    $server = 'dno6xji1n8fm828n.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
    $dbuser = 'frn8ql19w9jrd0hy';
    $pwd = 'uvsw3rnopxb2uxq2';
    $db = 'eq8apmg97080j54s';

    $conn = new mysqli($server, $dbuser, $pwd,$db);
    if ($conn->error){
        echo $conn->error;
    }else{
        echo "connection success";
    }

    $sql = "select * from Users where username = '$username'";
    echo $sql;
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            if (row["password"] == $password){
                echo "you login";
            }
        }
    }else{
        echo "<p>You can't see anything</p>";
    }



}else{
    echo "go back to login page";
}
