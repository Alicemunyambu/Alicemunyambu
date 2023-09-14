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

$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

$id=$_GET['student_id'];

$sql="SELECT *FROM user WHERE id='$id' ";

$result=mysqli_query($data,$sql);

$info=$result->fetch_assoc();


if(isset($_GET['update']))
{
    $name=$_POST['name'];
    $email=$__POST['email'];
    $phone=$__POST['phone'];
    $password=$_POST['password'];

    $query="UPDATE user SET username='$name',email='$email',
    phone='$phone',password='$password' WHERE id='$id'";

    $result2=mysqli_query($data,$query);

    if($reult2)
    {
      echo "success";
    }
}


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

<?php

include 'admin_sidebar.php';
?>

<div class="header">
    <center>
    <h1>Update student</h1>



<div class="div_deg">
    <form action="" method="POST">
        <div>
            <label for="">Username</label>
            <input type="text" name="name"
             value="<?php echo "{$info['username']}";?>">
        </div>

        <div>
            <label for="">Email</label>
            <input type="email" name="name"
            value="<?php echo "{$info['email']}";?>">
        </div>

        <div>
            <label for="">phone</label>
            <input type="number" name="name"
            value="<?php echo "{$info['phone']}";?>">
        </div>

        <div>
            <label for="">password</label>
            <input type="text" name="name"
            value="<?php echo "{$info['password']}";?>">
        </div>

        <div>
            
            <input class="btn btn-success" type="submit" name="update" value="update">
        </div>
    </form>
    </div>
    </center>
</div>

<aside class="ul">
    <ul>
        <li>
            <a href="admission.php">Admission</a>
        </li>
    </ul>

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
            <a href="add_courses.php">Add courses</a>
        </li>
    </ul>

    <ul>
        <li>
            <a href="view_course.php">View courses</a>
        </li>
    </ul>


    

</aside>

<div class="content">
    <table class="table">
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
    .div_deg
    {
        background-color: skyblue;
        width: 40px;
        padding-bottom: 70px;

        padding-top: 70px;

    }
    label
    {
        display: inline-block;
        width: 100px;
        text-align: right;
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