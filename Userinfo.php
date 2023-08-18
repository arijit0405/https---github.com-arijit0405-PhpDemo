<?php

$con= mysqli_connect('localhost','root');

if($con){
    echo "Thank You For Your Feedback :)";
}
else{

    echo"not done";
}

mysqli_select_db($con,'arijitdb');

$user= $_POST['User'];
$email= $_POST['Email'];
$mobile= $_POST['Mobile'];
$comment= $_POST['Comment'];

$query= " insert into userinfodata (User, Email, Mobile, Comment)
values ('$user', '$email', '$mobile', '$comment')";

mysqli_query($con,$query);

?>