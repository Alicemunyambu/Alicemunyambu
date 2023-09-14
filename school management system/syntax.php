<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("location:login.php");
}

elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");
}







//separate code from another file.

$_POST="localhost";

$user="root";

$password="";

$db="schoolproject";

$data=mysqli_connect($POST,$user,$password,$db);

if(isset($_POST['add_student']))
{
    $username=$_POST['name'];
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];
    $user_password=$_POST['password'];
    $usertype  ="student";

    $check="SELECT *FROM user WHERE username='$username' ";

    $check_user=mysqli_query($data,$check);

    $row_count=mysqli_num_rows($chech_user);

    if ($row_count==1)
    {   
        echo "<script type='text/javascript'>
        alert('Username already exists. Try another one');
        
        </script>";

         "Username already exists. Try another one";
    }
    else
    {

    

    $sql="INSERT INTO user(username,email,phone,usertype,password)
    VALUES('$username,'$user_email','user_phone','$usertype','user_password')";

    $result=mysqli_query($data,$sql);

    if($result)
{
   echo "<script type='text/javascript'>
   alert('Data upload success');
   
   </script>";
}
else
{
    echo "upload failed";
}
}


  
}



?>






?>