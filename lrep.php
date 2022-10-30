<?php
include("db.php");
extract($_GET);
$id=$_SESSION['did'];
$sql="insert into lrep(pid,did,repsum,doc) values('$pid','$id','$repsum','$doc')";
mysqli_query($con,$sql);
if(!mysqli_error($con))
{
    echo "<script> alert('added successfully');window.location='lrep.html'; </script>";   
}
else
{echo "<script> alert('Error occured'); window.location='lrep.html'; </script>";}