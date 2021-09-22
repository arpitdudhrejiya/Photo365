<?php
  session_start();
    if(isset($_SESSION['admin']))
    {
        include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Plus Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo_1/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
  <style>    
    .main-panel .content-wrapper .header-right .btn-icon-textc {
      font-size: 14px;
      background: #00cff4;
      padding: 0 19px 0 0;
      border: 0;
      color: #ffffff;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center; }
    .rtl .main-panel .content-wrapper .header-right .btn-icon-textc {
      padding: 0 0 0 19px; }
    .main-panel .content-wrapper .header-right .btn-icon-textc i {
      padding: 7px;
      display: inline-block;
      background: #01a0bb;
      margin-right: 15px;
      border-radius: 0;
      border-top-left-radius: 4px;
      border-bottom-left-radius: 4px; }
    .rtl .main-panel .content-wrapper .header-right .btn-icon-textc i {
      margin: 0;
      margin-left: 15px;
      border-radius: 0;
      border-top-right-radius: 4px;
      border-bottom-right-radius: 4px; }
  </style>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <?php
          $query = "select * from admin limit 1";
          $res = mysqli_query($con,$query);
          while($data = mysqli_fetch_array($res))
            {
        ?>
          <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
              <div class="nav-profile-image">
                <img src="../assets/images/faces/<?php echo $data['photo'];?>" alt="profile" />
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                <span class="font-weight-semibold mb-1 mt-2 text-center"><?php echo $data['name'];?></span>
                <span class="text-secondary icon-sm text-center"><?php echo $data['email'];?></span>
              </div>
            </a>
          </li>
            <?php } ?>
          <li class="nav-item pt-3">
            <a class="nav-link d-block" href="index.php">
              <img class="sidebar-brand-logo" src="../assets/images/logo.svg" alt="" />
              <img class="sidebar-brand-logomini" src="../assets/images/logo-mini.svg" alt="" />
              <div class="small font-weight-light pt-1">Responsive Dashboard</div>
            </a>
            <form class="d-flex align-items-center" action="#">
              <div class="input-group">
                <div class="input-group-prepend">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control border-0" placeholder="Search" />
              </div>
            </form>
          </li>
          <li class="pt-2 pb-1">
            <span class="nav-item-head">Available Pages</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-compass-outline menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/users.php">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/upload.php">
              <i class="mdi mdi-image menu-icon"></i>
              <span class="menu-title">Images</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/category.php">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Categoreis</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-certificate menu-icon"></i>
              <span class="menu-title">Subcription</span>
            </a>
          </li>


<!--
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Forms</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="mdi mdi-chart-bar menu-icon"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
            -->
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <?php
          include('pages/settings-panel.php');
        ?>
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-chevron-double-left"></span>
            </button>
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <ul class="navbar-nav navbar-nav-left">
              
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item nav-logout d-none d-md-block">
                <a href="pages/logout.php"><button class="btn btn-sm btn-danger">Logout</button></a>
              </li>
              <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="index.php">
                  <i class="mdi mdi-home-circle"></i>
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
                <div class="d-flex align-items-center"></div>
                <a href="pages/category.php"><button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-texts">
                  <i class="mdi mdi-plus-circle"></i> Add Categories </button></a>
                
                <div class="d-flex align-items-center">
                  <a class="pl-3 mr-2" href="#">
                    <p class="m-0"></p>
                  </a>
                </div>
                <a href="pages/upload.php"><button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                  <i class="mdi mdi-plus-circle"></i> Add Images </button></a>
<!--
                <div class="d-flex align-items-center">
                  <a class="pl-3 mr-2" href="#">
                    <p class="m-0"></p>
                  </a>
                </div>
                <a href="pages/subcription.php"><button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-textc">
                  <i class="mdi mdi-plus-circle"></i> Add Subcription </button></a>
            -->
              </div>
            </div>
            <!-- first row starts here -->
            <div class="row">
              <div class="col-xl-9 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between flex-wrap">
                      <div>
                        <div class="card-title mb-0">TOTAL USERS</div>
                        <h3 class="font-weight-bold mb-0">
                          <?php
                            $query11 = "select count(id) from imageup";
                            $res11 = mysqli_query($con,$query11);
                            $data11=mysqli_fetch_array($res11);
                            if(9 > $data11[0]) { echo '0'.$data11[0]; }
                            else { echo $data11[0]; }
                          ?>
                        </h3>
                      </div>
                      <div>
                        <div class="d-flex flex-wrap pt-2 justify-content-between sales-header-right">
                          <div class="d-flex mr-5">
                            <button type="button" class="btn btn-social-icon btn-outline-sales">
                              <i class="mdi mdi-inbox-arrow-down"></i>
                            </button>
                            <div class="pl-2">
                              <h4 class="mb-0 font-weight-semibold head-count"> 
                                <?php
                                  $query12 = "select count(id) from category";
                                  $res12 = mysqli_query($con,$query12);
                                  $data12=mysqli_fetch_array($res12);
                                  if(9 > $data12[0]) { echo '0'.$data12[0]; }
                                  else { echo $data12[0]; }
                                ?>
                              </h4>
                              <span class="font-10 font-weight-semibold text-muted">TOTAL CATEGORY</span>
                            </div>
                          </div>
                          <div class="d-flex mr-3 mt-2 mt-sm-0">
                            <button type="button" class="btn btn-social-icon btn-outline-sales profit">
                              <i class="mdi mdi-cash text-info"></i>
                            </button>
                            <div class="pl-2">
                              <h4 class="mb-0 font-weight-semibold head-count"> 
                                <?php
                                  $query13 = "select count(id) from imageup";
                                  $res13 = mysqli_query($con,$query13);
                                  $data13=mysqli_fetch_array($res13);
                                  if(9 > $data13[0]) { echo '0'.$data13[0]; }
                                  else { echo $data13[0]; }
                                ?>
                              </h4>
                              <span class="font-10 font-weight-semibold text-muted">TOTAL IMAGES</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="text-muted font-13 mt-2 mt-sm-0"></p>
                    <div class="flot-chart-wrapper">
                      <div id="flotChart" class="flot-chart">
                        <canvas class="flot-base"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 stretch-card grid-margin">
                <div class="card card-img">
                  <div class="card-body d-flex align-items-center">
                    <div class="text-white">
                      <h1 class="font-20 font-weight-semibold mb-0"> Get premium </h1>
                      <h1 class="font-20 font-weight-semibold">account!</h1>
                      <p>to optimize your selling</p>
                      <p class="font-10 font-weight-semibold"> 1 Year Package Include Festival, International and Daily Images. </p>
                      <button class="btn bg-white font-12">Get Subcription</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- image card row starts here -->
            <div class="row">
              
              <?php         
                $query2 = "select * from imageup ORDER BY id DESC limit 3";
                $res2 = mysqli_query($con,$query2);
                while($data2 = mysqli_fetch_array($res2))
                {
                ?>
              <div class="col-sm-4 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body p-0">
                    <img class="img-fluid w-100" style="height:250px;" src="pages/images/<?php echo $data2['name']; ?>" alt="" />
                  </div>
                  <div class="card-body px-3 text-dark">
                    <div class="d-flex justify-content-between">
                      <p class="text-muted font-13 mb-0"><?php echo $data2['name']; ?></p>
                    </div>
                    <div class="d-flex justify-content-between font-weight-semibold">
                      <p class="mb-0">
                        <i class="mdi mdi-star star-color pr-1"></i> </p>
                      <p class="mb-0"> <?php echo $data2['category']; ?> </p>
                    </div>
                  </div>
                </div>
              </div>
              <?php  }   ?>

            </div>
            <!-- table row starts here -->
            <div class="row">
              <div class="col-xl-4 grid-margin">
                <div class="card card-stat stretch-card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="text-white">
                        <h3 class="font-weight-bold mb-0">
                          <?php
                            $query11 = "select count(id) from imageup";
                            $res11 = mysqli_query($con,$query11);
                            $data11=mysqli_fetch_array($res11);
                            if(9 > $data11[0]) { echo '0'.$data11[0]; }
                        else { echo $data11[0]; }
                          ?>
                        </h3>
                        <h6>Total Users</h6>
                        <div class="badge badge-danger">53%</div>
                      </div>
                      <div class="flot-bar-wrapper">
                        <div id="column-chart" class="flot-chart"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card stretch-card mb-3">
                  <div class="card-body d-flex flex-wrap justify-content-between">
                    <div>
                      <h4 class="font-weight-semibold mb-1 text-black"> Yearly Member's </h4>
                      <h6 class="text-muted"> Yearly trial rs.599.99 per yaer</h6>
                    </div>
                    <h3 class="text-success font-weight-bold">
                    <?php
                            $query14 = "select count(id) from imageup";
                            $res14 = mysqli_query($con,$query14);
                            $data14=mysqli_fetch_array($res14);
                            if(9 > $data14[0]) { echo '0'.$data14[0]; }
                        else { echo $data14[0]; }
                          ?>
                    </h3>
                  </div>
                </div>
                <div class="card stretch-card mb-3">
                  <div class="card-body d-flex flex-wrap justify-content-between">
                    <div>
                      <h4 class="font-weight-semibold mb-1 text-black"> Monthly Member's </h4>
                      <h6 class="text-muted"> Monthly trial rs.99.99 per month </h6>
                    </div>
                    <h3 class="text-success font-weight-bold">
                      <?php
                        $query15 = "select count(id) from imageup";
                        $res15 = mysqli_query($con,$query15);
                        $data15=mysqli_fetch_array($res15);
                        if(9 > $data15[0]) { echo '0'.$data15[0]; }
                        else { echo $data15[0]; }
                      ?>
                    </h3>
                  </div>
                </div>
                <div class="card mt-3">
                  <div class="card-body d-flex flex-wrap justify-content-between">
                    <div>
                      <h4 class="font-weight-semibold mb-1 text-black"> Free Member's </h4>
                      <h6 class="text-muted">One Week Free Trial</h6>
                    </div>
                    <h3 class="text-danger font-weight-bold">
                    <?php
                            $query16 = "select count(id) from imageup";
                            $res16 = mysqli_query($con,$query16);
                            $data16=mysqli_fetch_array($res16);
                            if(9 > $data16[0]) { echo '0'.$data16[0]; }
                        else { echo $data16[0]; }
                        ?>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body pb-0">
                    <h4 class="card-title mb-0">New Registered Users</h4>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table custom-table text-dark">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Phone</th>
                            <th>Account</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <img src="../assets/images/faces/face2.jpg" class="mr-2" alt="image" /> Jacob Jensen </td>
                            <td>example@gmail.com</td>
                            <td>+91 8794562103</td>
                            <td>Premium</td>
                          </tr>
                          <tr>
                            <td>
                              <img src="../assets/images/faces/face3.jpg" class="mr-2" alt="image" /> Monube Deabis </td>
                            <td>example@gmail.com</td>
                            <td>+91 9874562502</td>
                            <td>Free Trial</td>
                          </tr>
                          <tr>
                            <td>
                              <img src="../assets/images/faces/face2.jpg" class="mr-2" alt="image" /> Jacob Jensen </td>
                            <td>example@gmail.com</td>
                            <td>+91 8794562103</td>
                            <td>Premium</td>
                          </tr>
                          <tr>
                            <td>
                              <img src="../assets/images/faces/face3.jpg" class="mr-2" alt="image" /> Monube Deabis </td>
                            <td>example@gmail.com</td>
                            <td>+91 9874562502</td>
                            <td>Free Trial</td>
                          </tr><tr>
                            <td>
                              <img src="../assets/images/faces/face2.jpg" class="mr-2" alt="image" /> Jacob Jensen </td>
                            <td>example@gmail.com</td>
                            <td>+91 8794562103</td>
                            <td>Premium</td>
                          </tr>
                          <tr>
                            <td>
                              <img src="../assets/images/faces/face3.jpg" class="mr-2" alt="image" /> Monube Deabis </td>
                            <td>example@gmail.com</td>
                            <td>+91 9874562502</td>
                            <td>Free Trial</td>
                          </tr><tr>
                            <td>
                              <img src="../assets/images/faces/face2.jpg" class="mr-2" alt="image" /> Jacob Jensen </td>
                            <td>example@gmail.com</td>
                            <td>+91 8794562103</td>
                            <td>Premium</td>
                          </tr>
                          <tr>
                            <td>
                              <img src="../assets/images/faces/face3.jpg" class="mr-2" alt="image" /> Monube Deabis </td>
                            <td>example@gmail.com</td>
                            <td>+91 9874562502</td>
                            <td>Free Trial</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <a class="text-black font-13 d-block pt-2 pb-2 pb-lg-0 font-weight-bold pl-4" href="pages/users.php">Show more</a>
                  </div>
                </div>
              </div>
            </div>
           
           
              
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php
            include('pages/footer.php');
          ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.stack.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<?php
    }
    else
    {
      header('location:pages/login.php');
    }
?>