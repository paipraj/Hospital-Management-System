<?php
include("db.php");
extract($_GET);
if($type == 'pat')  
{
    $sql= "select pwd as max from dpat where id='$id'";
    
    $res = mysqli_query($con,$sql);
    
    $val = mysqli_fetch_assoc($res);
    if($pwd ==$val['max'])
    {
        $_SESSION['pid'] = $id;
        echo "<script> alert('Logged in successfully'); window.location='patientlog.html'; </script>";}
    else{echo "<script> alert('incorrect id or password.'); window.location='login.html'; </script>";}
    
   // header('Location:medicine.html?msg=success');
    
}
if($type == 'doc')  
{
    $sql= "select pwd as max from ddoc where id='$id'";
    
    $res = mysqli_query($con,$sql);
    
    $val = mysqli_fetch_assoc($res);
    if($pwd ==$val['max'])
    {   $_SESSION['did'] = $id;
        echo "<script> alert('Logged in successfully'); window.location='lrep.html'; </script>";}
    else{echo "<script> alert('incorrect id or password.');window.location='login.html' ; </script>";}
    
   // header('Location:medicine.html?msg=success');
    
}
if($type == 'ph')  
{
    $sql= "select pwd as max from phar where id='$id'";
    
    $res = mysqli_query($con,$sql);
    
    $val = mysqli_fetch_assoc($res);
    $_SESSION['phid'] = $id;
    if($pwd ==$val['max'])
    {echo "<script> alert('Logged in successfully'); window.location='pm.html'; </script>";}
    else{echo "<script> alert('incorrect id or password.'); window.location='login.html'; </script>";}
    
   // header('Location:medicine.html?msg=success');
    
}
