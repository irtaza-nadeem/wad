<?php
$connection = mysqli_connect('localhost','root','','army_db');
if(!$connection)
    die("'army_db' database not connected.");
/* Question 2:  Write the code below accordingly */

$name = $_REQUEST["name"];
$reg = $_REQUEST["reg"];
$cgpa = $_REQUEST["cgpa"];
$dob = $_REQUEST["dob"];
$height = $_REQUEST["height"];

$c = "select * from candidates where reg = '$reg';";
$run  = mysqli_query($connection,$c);
$count = mysqli_num_rows($run);

if($count>0) {
    echo "Can't Apply Twice";
}
else{
    $c1 = "insert into candidates (name,reg,cgpa,dob,height) values ('$name','$reg','$cgpa','$dob','$height');";
    $run2  = mysqli_query($connection,$c1);
    echo "Applied Successfully";
}