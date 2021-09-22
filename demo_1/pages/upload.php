<?php

    include('../connection.php');

if(isset($_POST['submit']))
{
    date_default_timezone_set('Asia/Kolkata');
    $date = date("Y-m-d");

    $category = $_POST['category'];

    $fileCount = count($_FILES['file']['name']);
    for($i=0;$i<$fileCount;$i++)
    {
        $fileName = $_FILES['file']['name'][$i];

        $sql = "INSERT INTO imageup (name,category,uploaddate) VALUES ('$fileName','$category','$date')";

        if($con->query($sql) === TRUE)
        {
            echo "<script>
            alert ('Data is Sucssesfully Uploaded..');
         window.location.href = '../index.php';     
        </script>";
        }
        else
        {
            echo "<script>
            alert ('Data Uploading Error..');
         window.location.href = 'upload.php';     
        </script>";
        }

        move_uploaded_file($_FILES['file']['tmp_name'][$i], 'images/'.$fileName);
    }
}

?>

<?php
session_start();
if(isset($_SESSION['admin']))
{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Plus Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="../../assets/vendors/font-awesome/css/font-awesome.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/demo_1/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />


    <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Page level plugin JavaScript--><script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php
        include('sidebar.php');
      ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <?php
          include('settings-panel.php');
        ?>
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        <?php
          include('navbar.php');
        ?>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Enter New Images</h4>
                                <form class="form-inline" action="" method="post" enctype="multipart/form-data">

                                    <input style="height: 48px;" class="form-control " type="file" name="file[]" id="file" required="" multiple/>
                                    <div class="input-group mb-4 mr-sm-4"> </div>
                                    <select class="form-control form-control" name="category" id="exampleFormControlSelect1">
                                        <option disabled="disabled" selected="selected"> - - - - - - - - - Choose Category - - - - - - - -</option>
                                        <?php         
                                            $query = "select * from category ORDER BY name ASC";
                                            $res = mysqli_query($con,$query);
                                            while($data = mysqli_fetch_array($res))
                                                {
                                            ?>
                                            <option value="<?php echo $data['name']; ?>"><?php echo $data['name']; ?></option>
                                        <?php  }   ?>
                                    </select>
                                    <div class="input-group mb-4 mr-sm-4"> </div>
                                <input type="submit" name="submit" value="Upload" class="btn btn-primary mr-2">
                                <div class="input-group mb-2 mr-sm-2"> </div>
                                <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Uploaded Images <code><b>(  
                                <?php
                                    $query11 = "select count(id) from imageup";
                                    $res11 = mysqli_query($con,$query11);
                                    $data11=mysqli_fetch_array($res11);
                                    if(9 > $data11[0])
                                    {
                                        echo '0'.$data11[0];
                                    }
                                    else
                                    {
                                    echo $data11[0];
                                    }
                                ?> )</b>
                                </code></h4>
                               <hr>
                                <div class="table-responsive">
                                    <table id="dataTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                        <td>ID</td>
                                        <td>Images</td>
                                        <td>Category</td>
                                        <td>Date</td>
                                        <td>Remove</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php         
                                    $query2 = "select * from imageup";
                                    $res2 = mysqli_query($con,$query2);
                                    while($data2 = mysqli_fetch_array($res2))
                                    {
                                    ?>
                                        <tr>
                                        <td><?php echo $data2['id']; ?></td>
                                        <td class="py-1">
                                           <img src="images/<?php echo $data2['name']; ?>" alt="image" /> <?php echo $data2['name']; ?>
                                        </td>    
                                        <td><?php echo $data2['category']; ?></td>
                                        <td><?php echo $data2['uploaddate']; ?></td>
                                        <td><a href="imagedelete.php?imagedel=<?php echo $data2['id']; ?>"><i class="mdi mdi-delete-forever"></i></a></td>
                                        </tr>
                                        <?php  }   ?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
          <!-- partial:partials/_footer.html -->
          <?php
              include('footer.php');
          ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../../assets/vendors/flot/jquery.flot.js"></script>
    <script src="../../assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="../../assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="../../assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="../../assets/vendors/flot/jquery.flot.stack.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<?php
    }
    else
    {
      header('location:login.php');
    }
?>