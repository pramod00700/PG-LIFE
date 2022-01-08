<?php
    $db_hostname="localhost";
    $db_username="root";
    $db_password="";
    $db_name="test";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
        echo"connection failed:".mysqli_connect_error();    
        exit;
    }
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if(!result)
    {
        echo"error".mysqli_error($conn);
        exit;
    }
    $row=mysqli_fetch_assoc($result);
    if($row)
    {
        echo "hello".$row['name']."<br/>";
    }
    else{
        echo"login failed";
    }
    mysqli_close($conn);
?>
