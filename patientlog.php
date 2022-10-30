<?php
include("db.php");
extract($_GET);
$id=$_SESSION['pid'];

$html='<html> <head> </head> <body>';
if($g == 'c')  
{$sql= "select * from cd where pid='$id'";
    
    
    ?> 
<table style=" border: 1px solid black;text-align: center;">
    <tr style=" border: 1px solid black;text-align: center;">
    <th style=" border: 1px solid black;text-align: center;">Patient ID</th>
    <th style=" border: 1px solid black;text-align: center;">Doctor ID</th>
    <th style=" border: 1px solid black;text-align: center;">Remarks</th>
    <th style=" border: 1px solid black;text-align: center;">Date of consultation</th>
    <th style=" border: 1px solid black;text-align: center;">Date of further consultation</th>
  </tr>
    <?php
    $res = mysqli_query($con,$sql);
    while($val = mysqli_fetch_assoc($res))

  {
       
     ?>
<tr style=" border: 1px solid black;"> <td style=" border: 1px solid black;text-align: center;"> <?=$val["pid"] ?> </td> <td style=" border: 1px solid black;text-align: center;"> <?php echo $val['did'] ; ?> </td> <td style=" border: 1px solid black;text-align: center;"> <?php echo $val['rema'] ; ?></td> <td style=" border: 1px solid black;text-align: center;"> <?php echo $val['dc'] ; ?></td><td style=" border: 1px solid black;text-align: center;"> <?php echo $val['fc'] ; ?></td>   </tr> 

<?php
  }    
?> </table> 
<?php
}
if($g == 'lr')  
{
    $sql= "select * from lrep where pid='$id'";
    
    
    ?> 
<table style=" border: 1px solid black;text-align: center;">
    <tr style=" border: 1px solid black;text-align: center;">
    <th style=" border: 1px solid black;text-align: center;">Patient ID</th>
    <th style=" border: 1px solid black;text-align: center;">Doctor ID</th>
    <th style=" border: 1px solid black;text-align: center;">Remarks</th>
    <th style=" border: 1px solid black;text-align: center;">Date of consultation</th>
  </tr>
    <?php
    $res = mysqli_query($con,$sql);
    while($val = mysqli_fetch_assoc($res))

  {
       
     ?>
<tr style=" border: 1px solid black;"> <td style=" border: 1px solid black;text-align: center;"> <?=$val["pid"] ?> </td> <td style=" border: 1px solid black;text-align: center;"> <?php echo $val['did'] ; ?> </td> <td style=" border: 1px solid black;text-align: center;"> <?php echo $val['repsum'] ; ?></td> <td style=" border: 1px solid black;text-align: center;"> <?php echo $val['doc'] ; ?></td>   </tr> 

<?php
  }    
?> </table> 
<?php
}
if($g == 'mhis')  
{
    $sql= "select medevents from mhis where pid='$id'";
    
    $res = mysqli_query($con,$sql);
    
    $val = mysqli_fetch_assoc($res);
    if(!$val)
    {
         echo "<script> alert('No data'); window.location='patientlog.html'; </script>";
    }
    ?> 
<table style=" border: 1px solid black;">
    <tr style=" border: 1px solid black;">
    <th style=" border: 1px solid black;text-align: center;">Medical Events</th>
  </tr>
    <?php
    $res = mysqli_query($con,$sql);
    while($val = mysqli_fetch_assoc($res))

  {
       
     ?>
<tr style=" border: 1px solid black;"> <td style=" border: 1px solid black;text-align: center;"> <?=$val["medevents"] ?> </td> </tr> 

<?php
  }    
?> </table> 
<?php
}
if($g == 'alerts')  
{
    $sql= "select alerts from mhis where pid='$id'";
    
    $res = mysqli_query($con,$sql);
    
    $val = mysqli_fetch_assoc($res);
    if(!$val)
    {
         echo "<script> alert('No data'); window.location='patientlog.html'; </script>";
    }
    ?> 
<table style=" border: 1px solid black;">
    <tr style=" border: 1px solid black;">
    <th style=" border: 1px solid black;text-align: center;">Alerts</th>
  </tr>
    <?php
    $res = mysqli_query($con,$sql);
    while($val = mysqli_fetch_assoc($res))

  {
       
     ?>
<tr style=" border: 1px solid black;"> <td style=" border: 1px solid black;text-align: center;"> <?=$val["alerts"] ?> </td> </tr> 

<?php
  }    
?> </table> 
<?php
    
    
    
}