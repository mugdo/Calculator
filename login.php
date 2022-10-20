<?php
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "User");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
echo "Connect Successfully. Host info: " . $mysqli->host_info;


if (isset($_POST['reg_user']))
{
    echo "shaiful";
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from info where user_name='$uname' AND password='$password' limit 1";
    echo'<br>';
    echo "user name= $uname";
    echo'<br>';
    echo "$sql";
    echo'<br>';
    echo "password= $password";
    echo'<br>';
    if($result = $mysqli->query($sql))
    {
        if($result->num_rows > 0)
        {
            echo "you have successfully login";
            $_SESSION[user]=$uname;
            header("location: home.html");
            echo "<br>";
            echo "shaiful";
        }
        else
        {
            echo "ssyou have not successfully login";
            header("location: sinup.php");   
        }
    } 
}
else if(isset($_POST['forget']))
{
    header("location: forget.php");
}
?>
