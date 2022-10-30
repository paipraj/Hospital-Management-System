<?php
include("db.php");
extract($_GET);

$sql="insert into phar(name,ph,ad,pwd) values('$name','$num','$add','$pwd')";
mysqli_query($con,$sql);

if(!mysqli_error($con))
    
{
    $sql= "select max(id) as max from phar";
    
    $res = mysqli_query($con,$sql);
    
    $val = mysqli_fetch_assoc($res);
    
    $id =$val['max'];
    echo "<script> alert('Your pharmacy id is : $id'); window.location='medical.html'; </script>";
    
    
   // header('Location:medicine.html?msg=success');
    
}
else
{echo "<script> alert('Error occured'); window.location='medical.html'; </script>";}