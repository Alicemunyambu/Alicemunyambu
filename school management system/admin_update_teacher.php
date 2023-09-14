<?php

session_start();
error_reporting(0);

$data=mysqli_connect('localhost','root','','schoolproject');



if(!isset($_SESSION['update']))
{
    header("location:login.php");
}

elseif($_SESSION['usertype']=='admin')
{
    header("location:login.php");
}

if($_GET['teacher_id'])
{
    $id=$_GET['teacher_id'];

    $select="SELECT *FROM teachers WHERE id= '$id' ";

    $result=mysqli_query($data,$select);

    $info=$result->fetch_assoc();
}

if(isset($_POST['update_teacher']))
{
    $t_id=$_POST['id'];

    $t_name=$_POST['name'];

    $t_des=$_POST['description'];

    $file=$_FILES['image']['name'];

    $dst="./image/".$file;

    $dst_db="image/".$file;

    move_uploaded_file($_FILES['image']['tmp_name'],$dst);

    if($file)
    {
        $sql2="UPDATE teacher SET name='$t_name'description='$t_des'
        image='$dst_db' WHERE id='$t_id' ";
    }

    else
    {
        $sql2="UPDATE teacher SET name='$t_name'description='$t_des'
        WHERE id='$t_id' ";
    }
    }



$sql2="UPDATE teacher SET name='$t_name'description='$t_des'
image='$dst_db' WHERE id='$t_id' ";

$result2=mysqli_query($data,$sql2);

if($result2)
{
    header('location:view_teacher.php');
}


?>




<div class="content">
    <center>

<h1>Update Teacher Data</h1>

<form class="form_deg" action="admin_update_teacher.php" 
method="POST" enctype="multipart/form-data">

    <input type="text" name="id" 
    value="<?php echo"{$info['id']}"?>" hidden>

    <div>
        <label for="">Teacher Name</label>
        <input type="text" name="name"
         value="<?php echo"{$info['name']}"?>">
    </div>

    <div>
        <label for="">About teacher</label>
        <textarea name="description" rows="4">

        <?php echo"{$info['description']}"?>
        </textarea>
    </div>

    <div>
        <label for="">Teacher old image</label>
        <img width="100px" height="100px" src="<?php echo"{$info['image']}"?>" alt="">
    </div>

    <div>
        <label for="">Choose Teacher New image</label>
        <input type="file" name="image">
    </div>

    <div>
       
        <input type="submit" name="update_teacher"
        class="btn btn_success">
    </div>
</form>
</center>
   
</div>





 
    
</body>
<style>
    .form_deg
    {
        background-color: skyblue;
        width: 600px;
        padding-top: 70px;
        padding-bottom: 70px;

    }
    label
    {
        display: inline-block;
        width:150px ;
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