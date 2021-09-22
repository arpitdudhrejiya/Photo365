<?php
  $email = $_POST['email'];
  $password = $_POST['password'];

  include('../connection.php');

  $query = "select * from admin where email='".$email."' and password = '".$password."'";

  $res = mysqli_query($con,$query);

  $id = '';

  $counter = 0;

    while ($data = mysqli_fetch_array($res))
    {
      $id = $data['id'];
      $counter++;            
    }

    if($counter==1)
    {        
      session_start();

      $_SESSION['admin'] = $id;

      header('location:../index.php');
    }
    else
    {
      echo "<script>alert('Invalid email or Password')</script>";
 
      echo "<script>window.location.href = 'login.php'</script>";
    }

?>