<?php
$conn =mysqli_connect('localhost','root','','schoolproject');

if($conn){
    echo'connection succesful';
}
else{
    echo'error connecting';
}


?>