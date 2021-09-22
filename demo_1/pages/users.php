<?php
session_start();
if(isset($_SESSION['admin']))
{
        include('../connection.php');
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
                <div class="col-md-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Total Members
                      <code> <b>
                      ( <?php
                        $query11 = "select count(id) from imageup";
                        $res11 = mysqli_query($con,$query11);
                        $data11=mysqli_fetch_array($res11);
                        if(9 > $data11[0]) { echo '0'.$data11[0]; }
                        else { echo $data11[0]; }
                      ?> )</b>
                      </code></h4>
                      <hr>
                      <div class="table-responsive">
                      <table id="dataTable" class="table table-striped">
                        <thead>
                          <tr>
                            <td>ID</td>
                            <td>Photo</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Subcription</td>
                            <td>Action</td>
                          </tr>
                        </thead>
                        <tbody>
                        <?php         
                        $query2 = "select * from category ORDER BY id DESC";
                        $res2 = mysqli_query($con,$query2);
                        while($data2 = mysqli_fetch_array($res2))
                        {
                        ?>
                          <tr>
                            <td><?php echo $data2['id']; ?></td>
                            <td class="py-1">
                              <img src="users/face10.jpg" alt="image" />
                            </td>                            
                            <td><?php echo $data2['name']; ?></td>
                            <td>example@gmail.com</td>
                            <td>+91 8974563210</td>
                            <td>1 Month</td>
                            <td><a href="#?userup=<?php echo $data2['id']; ?>"> <i style="margin-right:40px;" class="mdi mdi-border-color"></i></a>
                            <a href="#?userdel=<?php echo $data2['id']; ?>"><i class="mdi mdi-delete-forever"></i></a>
                            </td>
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
    <!-- plugins:js 
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    endinject -->
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