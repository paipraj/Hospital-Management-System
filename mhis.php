<?php
include("db.php");
extract($_GET);

$sql="insert into mhis(pid,alerts,medevents) values('$pid','$alerts','$events')";
mysqli_query($con,$sql);

if(!mysqli_error($con))
    
{
    $sql= "select max(id) as max from dpat";
    
    $res = mysqli_query($con,$sql);
    
    $val = mysqli_fetch_assoc($res);
    
    $id =$val['max'];
    echo "<script> alert('added successfully'); window.location='mhis.html'; </script>";
    
    
   // header('Location:medicine.html?msg=success');
    
}
else
{echo "<script> alert('Error occured'); window.location='mhis.html'; </script>";}