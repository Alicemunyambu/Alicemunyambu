<?php
$data = mysqli_connect('localhost','root','','schoolproject');
session_start();

$select = "SELECT * FROM user";
mysqli_query($data,$select);

/*
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}

elseif($_SESSION['usertype']=='admin')
{
    header("location:login.php");
}
*/

$name=$_SESSION['name'];

$sql="SELECT *FROM user WHERE username='$name' ";
$result=mysqli_query($data,$sql);
$info=mysqli_fetch_assoc($result);

if(isset($__POST['update_profile']))
{
    $s_name=$_POST['username'];
    $s_email=$_POST['email'];
    $s_phone=$_POST['phone'];
    $s_password=$_POST['password'];

    $sql2="UPDATE user SET email='$s_email',phone='$s_phone',password='$s_password' 
    WHERE username='$name'";

    $result2=mysqli_query($data,$sql2);
    if($result2)
    {
       header('location:student_profile.php');
    }
   
}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Admin Dashboard</title>

    <?php

include 'student_css.php';

?>



   
</head>

    
    
<body>

<?php

include 'student_sidebar.php'

?>

<div class="content">
    <center>
        <h1>Update Profile</h1>
        <br><br>
        
    <form action="view_student.php" method="POST">
    <div class="div_deg">

   
    <div>
        <label for="">Email</label>
        <input type="email" name="email" value=
        "<?php echo"{$info['email']}"?>">>
    </div>

    <div>
        <label for="">phone</label>
        <input type="number" name="phone" value=
        "<?php echo"{$info['phone']}"?>">>
    </div>

    <div>
        <label for="">password</label>
        <input type="text" name="password" value=
        "<?php echo"{$info['password']}"?>">>
    </div>

    <div>
       
        <input type="submit" class="btn btn-primary"
         name="update_profile.php" value="update">
    </div>

    </div>
     </form>
    </center>


</div>







 
    
</body>
<style>
    .div_deg
    {
        background-color: skyblue;
        width: 500px;
        padding-top: 70px;
        padding-bottom: 70px;
    }
    label
    {
        display: inline-block;
        text-align: right;
        width: 100px;
        padding-top: 10px;
    }
   .header
   {
    background-color: skyblue;
    line-height: 70px;
    padding-left: 30px;

   }
   *
{
    margin: 0px;
    padding: 0px;
}
.a
{
    text-align: none;
}
.logout
{
    float: right;
    padding-right: 30px;
}
.ul
{
    background-color: #424a5b;
    width: 20%;
    height: 100%;
    position: fixed;
    padding-top: 5%;
    text-align: center;

}
ul li
{
    list-style: none;
    padding-bottom: 30px;
    font-size: 15px;
}
ul li a
{
    color: white;
    font-weight: bold;
}
ul li a:hover
{
    color: skyblue;
    text-decoration: none ;
}
a,a:hover
{
    text-decoration: none !important;
}
.content
{
    margin-left: 25%;
    margin-top: 5%;
} 
</style>


</html>