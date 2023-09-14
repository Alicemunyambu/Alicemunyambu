<?php

error_reporting(1);

$host="localhost";

$user="root";

$password="";

$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

if($data)
{
    echo "data connected successfully";
}
else
{
    echo "data failed";
}


if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $select = "SELECT * FROM user WHERE username = '$username' && password = '$pass'";
    $res = mysqli_query($data,$select);
    $row = mysqli_fetch_array($res);

    if($row['usertype'] == 'student'){
        header('location:studenthome.php');
        }
        else if($row['usertype'] == 'admin'){
            header('location:adminhome.php');
            }
            else{
                echo "wrong data entry";

            }
}





?>