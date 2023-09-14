
<?php

error_reporting(0);
session_start();
session_destroy();

if($_SESSION["message"])
{
    $message=$_SESSION['message'];

    echo"<script type='text/javascript'> 
    
    alert('$message');
    
    </script> ";
}

$data=mysqli_connect('localhost','root','','schoolproject');

$sql="SELECT *FROM teachers";

$result=mysqli_query($data,$sql);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student management system</title>
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
   <section class="nav">
        <nav>
            <label class="logo">w-school</label>
    
            <ul class="ul">
                
                <li><a href=""  class="navitem">Home</a></li>
                <li ><a href=""  class="navitem">contacts</a></li>
                <li><a href=""  class="navitem">Admission</a></li>
                <button  class="navitem btn btn-primary"><a href="login.php">login</a></button>
                
            </ul>
        </nav>
    </section>

    <div class="section1">
        <label class="img_age">We teach students with care </label>
        <img class="main_img" src="<?=$row1['picture']?>" alt="" srcset="">
    </div>

    
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="welcome_image" src="img3.jpg" alt="">
                </div>

                <div class="col-lg-6">
                    <h2 class="pclass">Welcome to w_school</h2>
                    <p class="pclass">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit 
                        dolorum esse omnis autem facilis sequi dolorem exercitationem commodi harum, sed iure eligendi incidunt 
                        in itaque provident sapiente molestiae natus! Provident?</p>
                     
                       
                </div>
            </div>
        </div>

     <section>
        <h1 class="h1">Our teachers</h1>
    

        <div class="container-fluid">
               <div class="container">
                   <div class="row ">

                   <?php
                   while($info=$result->fetch_assoc())

                   {

                  
                   
                   ?>


                       <div class="col-lg-4">

                        <img class="img1" src="<?php echo"{$info['image']}" ?>" alt="">

                        <h3><?php echo"{$info['name']}" ?></h3>

                        <h3><?php echo"{$info['description']}" ?></h3>

                       </div>

                       <?php
                       
                    }
                       ?>
   


                       
                   </div>
               </div>
           </div>

     </section> 

     <section class="sc4">
        <center>
            <h1>our courses</h1>
            <div class="container-fluid images">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                           <img class="cr1" src="img3.jpg" alt="">
                           <p class="p">web development</p>
                        </div>

                        <div class="col-sm-4">
                            <img  class="cr2" src="img6.jpg" alt="">
                            <p class="p">Graphic design</p>
                        </div>

                        <div class="col-sm-4">
                            <img  class="cr3" src="img2.jpg" alt="">
                            <p class="p">Marketing</p>
                        </div>
                    </div>
                </div>
            </div>
        </center>
     </section>
      


    <section class="sc5">
    <center>
        <h1 class="admin">Admission Form</h1>
        <br>

        <form action="data_check.php" method="POST">
            <div>
            <label class="form" for="">name</label>
            <input class="input_deg" type="" name="name">
            <br>
            <br>
        </div>
        
        <div>
            <label class="form"  for="">phone</label>
            <input class="input_deg" type="" name="phone">
            <br>
            <br>
        </div>


        <div>
            <label class="form"  for="">email</label>
            <input class="input_deg" type="" name="email">
            <br>
            <br>
        </div>

        <div>
            <label class="form"   for="">message</label>
            <input class="input_deg" id="input" type="" name="message">
            <br>
            <br>
        </div>    

            <button class="btn btn-primary" name="apply">Sumbit</button>
        </form>
    </center>
    </section>

    <footer class="footer">
        <h2 class="h2">All @copyright preserved by web technology</h2>
    </footer>

    
    
</body>
<style>
    .admin{
        padding-top: 36px;
        padding-bottom: 36px;
    }
    .h2
    {
        text-align: center;
        color: white;
        top: 20%;
        position: relative;


    }
    .footer
    {
        background-color: black;
        height: 76px;
        width: 100%;

        

    }
    .button{
        background-color: navy;
        height: 30px;
        width: 10%;
        border-radius: 25px;

    }
    .sc5{
        background-color: brown;
    }
    .input_deg{
        width: 30%;
        height: 40px;
        border-radius: 25px;
        border: 1px solid blue;
    }
    #input{
        height: 80px;
    }
    .form{
        display: inline-block;
        width: 100px;
        text-align: right;
        padding-right: 50px;

        
    }
    .p{
        text-decoration: white;
        font-size: large;
    }
    .sc4{
        background-color: blue;
        height: 500px;
    }
    .cr1{
        height: 100%;
        width: 100%;
        

    }
    .cr2{
        height: 100%;
        width: 90%;
        
    }
    .cr3{
        height: 100%;
        width: 90%;
        
    }
    .pclass{
        padding: 5%;
    }
    .img1{
        height: 70%;
        width: 70%;
    }
    .img2{
        width: 60%;
        height: 70%;
    }
    .img3{
        width: 60%;
        height: 70%;
    }
    .row{
        display: flex;
        
    }
    .h1{
        text-align: center;
    }
    .logo{
        font-size: 25px;
        position: relative;
        left: 5%;
        color: white;
        font-weight: bold;
        line-height: 76px;


    }
    *{
        padding: 0;
        margin: 0;
    }
    nav{
        position: fixed;
        background-color: skyblue;
        z-index: 1;
        height: 70px;
        width: 100%;
    }
    ul{
       position: relative;
       float: right;
       margin-right: 30px;

    }
    ul li{
        display: inline-block;
        line-height: 76px;
        margin: 0 5px;
    }
    navitem{
        text-decoration: none;
        color: white;
        font-size: 76px;
    }
    .main_img{
        width: 100%;
        height: 300px;

    }
    .section1{
        padding-top: 76px;
    }
    .img_age{
        position: absolute;
        top: 20%;
        left: 30%;
        color: white;
        background-color: midnightblue;
        padding-right: 20px;
        padding-left: 20px;
        font-size: 35px;

    }
    .welcome_image{
       width: 300px;
       height: 256px; 
    }
    .container{
        padding-top: 50px;
    }
    .teachers{
        width: 200px;
        height: 200px;

    }
    .sc3{
        background-color: aqua;
        padding-top: 50px;
    }
</style>

</html>
