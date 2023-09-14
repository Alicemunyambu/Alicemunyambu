<?php

session_start();
error_reporting(1);





$data=mysqli_connect('localhost','root','','schoolproject');

$sql="SELECT *FROM teachers";

$result =mysqli_query($data,$sql);


if($_GET['teacher_id'])
{
    $t_id=$_GET['teacher_id'];

    $sql2="DELETE FROM teachers WHERE id='$t_id'";

    $result2=mysqli_query($data,$sql2);

    if($result2)
    {
    header('location: admin_view_teacher.php');
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



<div class="content">
    <center>

    <h1>View All teachers data</h1>

    <table border="1px">
        <tr>
            <th class="table_th">Teacher Name</th>
            <th class="table_th">About the teacher</th>
            <th class="table_th">image</th>
            <th class="table_th">Delete</th>
            <th  class="table_th">Update</th>
        </tr>

         <?php
         
         while($info=$result->fetch_assoc())
         {

         
         
         ?>

        <tr>
            <td class="table_td">

                <?php echo "{$info['name']}" ?>
            
            </td>

            <td class="table_td">

               <?php echo "{$info['description']}" ?>
            </td>

            <td class="table_td">

             <img height="100px" width="100px" src=" <?php echo "{$info['image']}" ?>" alt="">
            </td>

            <td class="table_td">
                <?php

                echo"
                <a onClick=\"javascript:return confirm('Are you sure to Delete This');\" class='btn btn-danger' href=
                'admin_view_teacher.php?teacher_id={$info['id']}
                '>

                    Delete

                </a>";
                ?>
            </td>
            <td class="table_td">

            <?php

                echo "
                <a href='admin_update_teacher.php?teacher_id={$info['id']}' class='btn btn-primary'>
                Update</a>";

                ?>

            </td>

          
        </tr>
        <?php
        }

        ?>
    </table>
    </center>

</div>




 
    
</body>
<style>
    body{
        background-color:blueviolet;
    }
   
.table_td
{
    background-color: skyblue;
    padding: 20px;
}
.table_th
{
    padding: 20px;
    font-size: 20px;

}
</style>


</html>