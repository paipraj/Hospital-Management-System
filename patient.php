<?php
include("db.php");
extract($_GET);

$sql="insert into dpat(name,age,ht,wt,g,no,bg,em,emno,pwd) values('$name','$age','$ht','$wt','$g','$no','$bg','$emname','$emno','$pwd')";
mysqli_query($con,$sql);

if(!mysqli_error($con))
    
{
    $sql= "select max(id) as max from dpat";
    
    $res = mysqli_query($con,$sql);
    
    $val = mysqli_fetch_assoc($res);
    
    $id =$val['max'];
    echo "<script> alert('Your patient id is : $id'); window.location='patient.html'; </script>";
    
    
   // header('Location:medicine.html?msg=success');
    
}
else
{echo "<script> alert('Error occured'); window.location='patient.html'; </script>";}