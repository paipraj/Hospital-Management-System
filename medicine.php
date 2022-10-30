<?php
include("db.php");
//extract($_GET);

//$id = $_GET['id'];
$name = $_GET['name'];
$comp = $_GET['comp'];

$sql="insert into md(name,comp) values('$name','$comp')";
mysqli_query($con,$sql);

if(!mysqli_error($con))
    
{
    $sql= "select max(id) as max from md";
    
    $res = mysqli_query($con,$sql);
    
    $val = mysqli_fetch_assoc($res);
    
    $id =$val['max'];
    echo "<script> alert('Your medicine id is : $id'); window.location='medicine.html'; </script>";
    
    
   // header('Location:medicine.html?msg=success');
    
}
else
{echo "<script> alert('Error occured'); window.location='medicine.html'; </script>";}