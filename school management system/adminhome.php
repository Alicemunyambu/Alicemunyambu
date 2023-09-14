<?php

session_start();


/*
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}

elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");
}
*/

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>

    
   
    
<body>



<header class="header">

<a href="">Admin Dashboard</a>
<div class="logout">
    <a class="btn btn-primary" href="">logout</a>
</div>


</header>

<aside class="ul">
   

    <ul>
        <li>
            <a href="add_student.php">Add student</a>
        </li>
    </ul>

    <ul>
        <li>
            <a href="view_student.php">view student</a>
        </li>
    </ul>

    <ul>
        <li>
            <a href="add_teacher.php">Add teacher</a>
        </li>
    </ul>

    <ul>
        <li>
            <a href="view_teacher.php">view teacher</a>
        </li>
    </ul>

   

    <ul>
        <li>
            <a href="view_courses.php">View courses</a>
        </li>
    </ul>


    

</aside>

<div class="content">
    <table class="table" >
        <tr >
            <th class="th">Name</th>
            <th class="th">phone</th>
            <th class="th">email</th>
            <th class="th">message</th>
        </tr>
        <tr >
            <td class="th">Hollet</td>
            <td class="th">0756478398</td>
            <td class="th">h@gmail.com</td>
            <td class="th">nursing</td>
        </tr>
    </table>
</div>





 
    
</body>
<style>
   .header
   {
    background-color: skyblue;
    line-height: 70px;
    padding-left: 30px;
    height: 90px;

   }
   *
{
    margin: 0px;
    padding: 0px;
}
.a
{
    text-decoration: none;
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
.table
{
    border: 1px solid;
    padding: 25px;
}
.th
{
   border: 1px;
}
</style>


</html>