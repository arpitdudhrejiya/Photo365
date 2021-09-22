<?php
 include('../connection.php');


 $id = $_REQUEST['imagedel'];
 $q = "select * from imageup where id=".$id;
 $r = mysqli_query($con,$q);
 $f = mysqli_fetch_array($r);

 $image = $f['name'];
 unlink('images/'.$image);
 $query = "delete from imageup where id=".$id;
 $res = mysqli_query($con,$query);

   if($res OR $r)
   {
       echo "<script> alert ('Data is Sucssesfully Deleted..'); 
       window.location.href = 'upload.php'; </script>";
   }
   else
   {
       echo "<script> alert ('Data Deleting Error..');
       window.location.href = 'upload.php'; </script>";
   }
?>