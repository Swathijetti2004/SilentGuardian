<?php
  if($_SERVER['REQUEST_METHOD']=="POST"){
    include 'connect.php';

    // $username=$_POST['username'];
    // $password=$_POST['password'];
    
    $type=$_POST['type'];
    $state=$_POST['state'];
    $district=$_POST['district'];
    $pincode=$_POST['pincode'];
    $evidence=$_POST['evidence'];
    $datetime=time();
    $description=$_POST['description'];

    $sql="insert into  `compliants` (type,state,district,pincode,evidence,datetime,description) 
    values('$type','$state','$district','$pincode','$evidence','$datetime','$description')";
    // $sql="insert into complaints values ('')";
    //$sql="select * from `logindata` where username= '$username' and password='$password'";
    $result=mysqli_query($connection,$sql);

    if($result){
      $num=mysqli_num_rows($result);
      if($num>0){
        session_start();
        header('location:index.php');
    }else{
        echo "complaint is not submitted";

      }
    }
  }
?>