<?php
$con=mysqli_connect('localhost','root');
if($con){
    echo "Connection Successful";
}
else{
    echo "No connnection";
}

mysqli_select_db($con,'pylibuser');

$user =$_POST['user'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$comments =$_POST['comments'];

$query =" insert into info (user,email,mobile,comment) 
values ('$user','$email','$mobile','$comments')";

mysqli_query($con,$query);

header('location:index.php');

?>
