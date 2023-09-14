<?php
@include("connect.php");

if(isset($_POST['add_student'])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $phone= $_POST['phone'];
    $usertype= $_POST['usertype'];
    $password= $_POST['password'];

    //insert data to database
   

    //check for repeated data
    $select = "SELECT *from user WHERE username='$username' && email ='$email'&& phone ='$phone'&& usertype='$usertype'&& password='$password'";
    $result= mysqli_query($conn,$select);

    if(mysqli_num_rows($result)>0){
        echo"user already exist";
    }
    else{
        $insert = "INSERT INTO user(username,email,phone,usertype,password)VALUES('$username','$email','$phone','$usertype','$password')";
        $result= mysqli_query($conn,$insert);
    
    if($insert){
        echo "success";
    }
    else{
        echo "data failed";
    }
}
};

?>