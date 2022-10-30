<?php
include("db.php");
extract($_GET);
$id=$_SESSION['phid'];
$sql="insert into pm(pid,did,mid,phid,dosage) values('$pid','$did','$mid','$id','$dosage')";
mysqli_query($con,$sql);
if(!mysqli_error($con))
{
    echo "<script> alert('added successfully');window.location='pm.html'; </script>";   
}
else
{echo "<script> alert('Error occured'); window.location='pm.html'; </script>";}