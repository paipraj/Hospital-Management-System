<?php
include("db.php");
extract($_GET);
$id=$_SESSION['ideas'];
$sql="insert into lrep(pid,did,repsum,doc) values('$pid','$id','$repsum','$doc')";
mysqli_query($con,$sql);
if(!mysqli_error($con))
{
    echo "<script> alert('added successfully');; </script>";   
}