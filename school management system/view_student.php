<?php

session_start();
error_reporting(1);





$data=mysqli_connect('localhost','root','','schoolproject');

$sql="SELECT *FROM user";

$result =mysqli_query($data,$sql);


if($_GET['student_id'])
{
    $t_id=$_GET['student_id'];

    $sql2="DELETE FROM user WHERE id='$t_id'";

    $result2=mysqli_query($data,$sql2);

    if($result2)
    {
    header('location: view_student.php');
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

    <h1>View students data</h1>

    <table border="1px">
        <tr>
            <th class="table_th">student username</th>
            <th class="table_th">student phone</th>
            <th class="table_th">email</th>
            <th class="table_th">Delete</th>
            <th class="table_th">Update</th>
        </tr>

         <?php
         
         while($info=$result->fetch_assoc())
         {

         
         
         ?>

        <tr>
            <td class="table_td">

                <?php echo "{$info['username']}" ?>
            
            </td>

            <td class="table_td">

               <?php echo "{$info['phone']}" ?>
            </td>

            <td class="table_td">
              
            <?php echo "{$info['email']}" ?> 
            </td>

           
            <td class="table_td">
                <?php

                echo"
                <a onClick=\"javascript:return confirm('Are you sure to Delete This');\" class='btn btn-danger' href=
                'view_student.php?student_id={$info['id']}
                '>

                    Delete

                </a>";
                ?>
            </td>
            <td class="table_td">

            <?php

                echo "
                <a href='view_student.php?student_id={$info['id']}' class='btn btn-primary'>
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