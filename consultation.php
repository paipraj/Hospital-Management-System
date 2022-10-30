<?php
include("db.php");
extract($_GET);
$id=$_SESSION['did'];
$sql="insert into cd(pid,did,rema,dc,fc) values('$pid','$id','$rema','$doc','$dofc')";
mysqli_query($con,$sql);
if(!mysqli_error($con))
{
    echo "<script> alert('added successfully');window.location='consultation.html'; </script>";   
}
else
{echo "<script> alert('Error occured');; </script>";}