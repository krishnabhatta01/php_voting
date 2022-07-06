<?php

session_start();
if(!isset($_SESSION['id'])){
  header('location:../');
}
$data = $_SESSION['data'];

if($_SESSION['status']==1){
  $status='<b class="text-success">Voted</b>';
}else{
  $status='<b class="text-danger">Not Voted</b>';
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style.css">
  <link rel="shortcut icon" href="../partials/assets/images/favicon.svg" type="image/x-icon" />
  <title>Dashboard</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/lineicons.css" />
  <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="assets/css/fullcalendar.css" />
  <link rel="stylesheet" href="assets/css/fullcalendar.css" />
  <link rel="stylesheet" href="assets/css/main.css" />

</head>

<body>
  <!-- ======== sidebar-nav start =========== -->
  <aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
      <a href="index.html">
        <img src="assets/images/logo/logo.svg" alt="logo" />
      </a>
    </div>
    <nav class="sidebar-nav">
      <ul>


        <li class="nav-item nav-item-has-children">
          <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_3" aria-controls="ddmenu_3"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12.9067 14.2908L15.2808 11.9167H6.41667V10.0833H15.2808L12.9067 7.70917L14.2083 6.41667L18.7917 11L14.2083 15.5833L12.9067 14.2908ZM17.4167 2.75C17.9029 2.75 18.3692 2.94315 18.713 3.28697C19.0568 3.63079 19.25 4.0971 19.25 4.58333V8.86417L17.4167 7.03083V4.58333H4.58333V17.4167H17.4167V14.9692L19.25 13.1358V17.4167C19.25 17.9029 19.0568 18.3692 18.713 18.713C18.3692 19.0568 17.9029 19.25 17.4167 19.25H4.58333C3.56583 19.25 2.75 18.425 2.75 17.4167V4.58333C2.75 3.56583 3.56583 2.75 4.58333 2.75H17.4167Z" />
              </svg>
            </span>
            <span class="text">Auth</span>
          </a>
          <ul id="ddmenu_3" class="collapse dropdown-nav">
            <li>
              <a href="signin.html"> Sign In </a>
            </li>
            <li>
              <a href="logout.php"> Sign Out </a>
            </li>
          </ul>
        </li>
        <span class="divider">
          <hr />
        </span>

  </aside>
  <div class="overlay"></div>
  <!-- ======== sidebar-nav end =========== -->

  <!-- ======== main-wrapper start =========== -->
  <main class="main-wrapper">
    <!-- ========== header start ========== -->
    <header class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-6">
            <div class="header-left d-flex align-items-center">
              <div class="menu-toggle-btn mr-20">
                <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                  <i class="lni lni-chevron-left me-2"></i> Menu
                </button>
              </div>
              <a class="btn btn-primary" href="../" role="button">back</a>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 col-6">
            <div class="header-right">



              <!-- profile start -->
              <div class="profile-box ml-15">
                <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="profile-info">
                    <div class="info">
                      <h6>
                        <?php echo $data['username']; ?>
                      </h6>
                      <div class="image">
                        <img src="assets/images/profile/profile-image.png" alt="" />
                        <span class="status"></span>
                      </div>
                    </div>
                  </div>
                  <i class="lni lni-chevron-down"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                  <li>
                    <a href="#0">
                      <i class="lni lni-user"></i> View Profile
                    </a>
                  </li>
                  <li>

                  <li>
                    <a href="logout.php"> <i class="lni lni-exit"></i> Sign Out </a>
                  </li>
                </ul>
              </div>
              <!-- profile end -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- ========== header end ========== -->

    <!-- ========== section start ========== -->
    <section class="section">
      <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="title mb-30">
                <h2>Dashboard</h2>
              </div>
            </div>

          </div>
          <!-- end row -->
        </div>
        <!-- ========== title-wrapper end ========== -->
        <div class="row d-flex">
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <?php

              if(isset($_SESSION['groups'])){

                        $groups=$_SESSION['groups'];
                        for($i=0;$i<count($groups);$i++){
                          ?>

                          <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="./assets/images/products/product-mini-1.jpg" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">

                                  <strong>Group name:
                                    <?php echo $groups[$i]['username'] ?>
                                  </strong><br>
                                  <strong>Votes:
                                    <?php echo $groups[$i]['votes'] ?>
                                  </strong><br>

                                  <form action="../action/voting.php" method="post">
                                    <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes'] ?>">
                                    <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id'] ?>">

                                    <?php
                                                  if($_SESSION['status']==1){
                                                    ?>
                                    <button class="btn btn-primary my-5">Voted</button>
                                    <?php
                                                  }else{
                                                    ?>
                                    <button class="btn btn-primary my-5">vote</button>
                                    <?php
                                                  }
                                                ?>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>

                        <?php
                      }
                    }
                  else{
                    ?>
                      <div class="container">
                        <p>no groups to display</p>
                      </div>
                      <?php
                  }
                    ?>


            <!-- End Icon Cart.......................... -->

          </div>
          <!-- End Col -->
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="card mb-3" style="max-width: 540px;">


              <div class="row g-0">
                <div class="col-md-4">
                  <img src="" class="img-fluid rounded-start b-fit" alt="datas">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <strong>Name:
                      <?php echo $data['username']; ?>
                    </strong><br>

                    <strong>Mobile:
                      <?php echo $data['mobile']; ?>
                    </strong><br>
                    <strong>Status: </strong><br>
                    <?php echo $status; ?><br><br>

                  </div>
                </div>
              </div>
            </div>
            <!-- End Icon Cart -->
          </div>
          <!-- End Col -->

          <!-- End Row -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== section end ========== -->



  </main>


  <!-- ========= All Javascript files linkup ======== -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/Chart.min.js"></script>
  <script src="assets/js/dynamic-pie-chart.js"></script>
  <script src="assets/js/moment.min.js"></script>
  <script src="assets/js/fullcalendar.js"></script>
  <script src="assets/js/jvectormap.min.js"></script>
  <script src="assets/js/world-merc.js"></script>
  <script src="assets/js/polyfill.js"></script>
  <script src="assets/js/main.js"></script>


</body>

</html>