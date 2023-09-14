<?php
@include("connect.php");

if(isset($_POST['add_teacher'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    

    //insert data to database
   

    //check for repeated data
    $select = "select *from teachers where name='$name' && description ='$description'&& image ='$image'";
    $result1 = mysqli_query($conn,$select);

    if(mysqli_num_rows($result1)>0){
        echo"user already exist";
    }
    else{
        $insert = "INSERT INTO teachers(name,description,image)VALUES('$name','$description','$image')";
        $result= mysqli_query($conn,$insert);
    
    if($insert){
        header('location:add_teacher.php');
    }
    else{
        echo "data failed";
    }
}
};

?>