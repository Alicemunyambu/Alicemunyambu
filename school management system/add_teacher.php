<?php



session_start();
error_reporting(1);

$data=mysqli_connect('localhost','root','','schoolproject');



    if($result)
    {
        echo "teacher added";
        header('location:add_teacher.php');
    }
    else{
        echo "data saving failed";
    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
         <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>
        
</head>

    
    <title>Add teachers</title>
    
<body>

<header class="header">

<a href="add_teacher.php">Admin Dashboard</a>

<div class="logout">
    <a class="btn btn-primary" href="login.php">logout</a>
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
            <a href="">View student</a>
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
    <center>

    <h1>Add Teacher</h1>
    <br><br>
    <div class="div_deg">
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="">Teacher Name :</label>
                <input type="text" name="name">
            </div>
            <br>

            <div>
                <label for="">Description :</label>
                <textarea name="description"></textarea>
            </div>
            <br>

            <div>
                <label for="">image :</label>
                <input type="file" name="image">
            </div>
            <br>

            <div>
               
                <input type="submit" name="add_teacher"
                value="Add teacher" class="btn btn-primary">
            </div>
        </form>
    </div>

    </center>
</div>





 
    
</body>
<style>
    body{
        background-color:blueviolet;
    }
    .div_deg
    {
        background-color: skyblue;
        width: 400px;
        padding-top: 70px;
        padding-bottom: 70px;
    }
    label
    {
        display: inline-block;
        text-align: right;
        width: 100px;
        padding-top: 10px;
        padding-bottom: 10px;

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