<?php
$data = mysqli_connect('localhost','root','','schoolproject');
session_start();

$select = "SELECT * FROM user";
mysqli_query($data,$select);








?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>student Dashboard</title>

   <?php
   
   @include 'student_css.php';
   
   ?>
</head>

    
    
<body>
   

<header class="header">

<a href="">student Dashboard</a>
<div class="logout">
    <a class="btn btn-primary" href="logout.php">logout</a>
</div>


</header>


<aside class="ul">
    <ul>
        <li>
            <a href="student_profile.php">My profile</a>
        </li>
    </ul>

    <ul>
        <li>
            <a href="view_courses.php">My courses</a>
        </li>
    </ul>

    <ul>
        <li>
            <a href="">My Results</a>
        </li>
    </ul>
   </aside>

</body>
<style>
   .header
   {
    background-color: skyblue;
    line-height: 70px;
    padding-left: 30px;
    height: 100px;


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