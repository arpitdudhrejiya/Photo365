<?php
 include('../connection.php');


 $cid = $_REQUEST['categorydel'];
 $query2 = "delete from category where id='$cid'";
 $sql = mysqli_query($con,$query2);

   if($sql)
   {
       echo "<script> alert ('Category is Sucssesfully Deleted..'); 
       window.location.href = 'category.php'; </script>";
   }
   else
   {
       echo "<script> alert ('Category Not Delete Error..');
       window.location.href = 'category.php'; </script>"; 
   }

?>