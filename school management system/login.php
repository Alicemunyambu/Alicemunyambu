<?php
$data = mysqli_connect('localhost','root','','schoolproject');
session_start();
error_reporting(1);


if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $select = "SELECT * FROM user WHERE username = '$username' && password = '$pass'";
    $res = mysqli_query($data,$select);
    $row = mysqli_fetch_array($res);

    if($row['usertype'] =='student'){
        $_SESSION['studentname'] = $row['username'];
        header('location:studenthome.php');
        
        }
        else if($row['usertype'] =='admin'){
            $_SESSION['adminname'] = $row['username'];
            header('location:adminhome.php');
            
            }
            else{
                echo "wrong data entry";

            }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity=
    "sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  
  
</head>
<body>
     <center>
        <div class="form_deg">
            <center class="title_deg">
                loginform

                <h4>
                    <?php
                       error_reporting(1);
                       session_start();

                       session_destroy();

                        echo $_SESSION['loginmessage'];
                    ?>
                </h4>
            </center>
            <form action="adminhome.php" method="POST" class="login_form">
                <div>
                    <label class="label_deg" for="">Username</label>
                    <input type="text" name="username">
                </div>

                <div>
                    <label class="label_deg" for="">Password</label>
                    <input type="text" name="password">
                </div>

                <div>
                    
                    <button class="btn btn-primary" type="submit" name="submit">Login</button>
                </div>
            </form>
        </div>
     </center>
    
</body>
<style>
    body
    {
        background-image: url(img3.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      

    }
    .form_deg
    {
        padding-top: 200px;
    }
    .label_deg
    {
        display: inline-block;
        color: skyblue;
        width: 100px;
        padding-top: 10px;
        padding-bottom: 10px;


    }
    .login_form
    {
        background-color: black;
        width: 400px;
        padding-top: 70px;
        padding-bottom: 70px;
    }
    .title_deg
    {
        background-color: skyblue;
        color: white;
        text-align: center;
        font-weight: bold;
        width: 400px;
        padding-top: 10px;
        padding-top: 10px;
        font-size: 20px;
        


    }
</style>
</html>