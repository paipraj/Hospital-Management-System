<?php
include("db.php");
extract($_GET);

$sql="insert into ddoc(name,age,g,spec,qual,no,hname,pwd) values('$name','$age','$g','$spec','$qual','$num','$hname','$pwd')";
mysqli_query($con,$sql);

if(!mysqli_error($con))
    
{
    $sql= "select max(id) as max from ddoc";
    
    $res = mysqli_query($con,$sql);
    
    $val = mysqli_fetch_assoc($res);
    
    $id =$val['max'];
    echo "<script> alert('Your doctor id is : $id'); window.location='medicine.html'; </script>";
    
    
   // header('Location:medicine.html?msg=success');
    
}
else
{echo "<script> alert('Error occured'); window.location='medicine.html'; </script>";}