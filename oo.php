<?php
$con = mysqli_connect("localhost","root");


mysqli_select_db($con,"student");
$name =$_POST['name'];
$phone =$_POST['phone'];
$email =$_POST['email'];
$year =$_POST['year'];
$query = "insert into data (name, phone, email, year)
values('$name','$phone','$email','$year')";
mysqli_query($con, $query);
header("location:index.html");

?>