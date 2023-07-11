<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>objectif</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href=<?php echo site_url('assets/admin/assets/vendors/mdi/css/materialdesignicons.min.css') ?>>
    <link rel="stylesheet" href=<?php echo site_url('assets/admin/assets/vendors/css/vendor.bundle.base.css')?>>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href=<?php echo site_url('assets/admin/assets/vendors/jvectormap/jquery-jvectormap.css')?>>
    <link rel="stylesheet" href=<?php echo site_url('assets/admin/assets/vendors/flag-icon-css/css/flag-icon.min.css')?>>
    <link rel="stylesheet" href=<?php echo site_url('assets/admin/assets/vendors/owl-carousel-2/owl.carousel.min.css')?>>
    <link rel="stylesheet" href=<?php echo site_url('assets/admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css')?>>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href=<?php echo site_url('assets/admin/assets/css/style.css')?>>
    <!-- End layout styles -->
    <link rel="shortcut icon" href=<?php echo site_url('assets/admin/assets/images/favicon.png')?> />
  </head>
  <style>
    .fontblack{
      color: black;
    }
    .degrad{
      background-image: linear-gradient(to left,#e28370, #d43a14 );
    }
  </style>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                  <span>Gold Member</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
        
          <li class="nav-item menu-items" style="margin-top: 15%;">
            <a class="nav-link" href="acceuil.html">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Statistiques</span>
            </a>
          </li>

          <li class="nav-item menu-items" style="margin-top: 15%;">
            <a class="nav-link" href=<?php echo site_url('Objectif_controller/objectif')?>>
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Objectifs</span>
            </a>
          </li>
         
          <li class="nav-item menu-items"  style="margin-top: 15%;">
            <a class="nav-link" href=<?php echo site_url('Regime_controller/regime')?>>
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Regimes</span>
            </a>
          </li>
          <li class="nav-item menu-items"  style="margin-top: 15%;">
            <a class="nav-link" href=<?php echo site_url('Sport_controller/sport')?>>
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Sports</span>
            </a>
          </li>
         
         
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li> 
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
              
         
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel"  style="background-color: #e8edf3;">
          <div class="content-wrapper" style="background-color: #e8edf3 ;" >
            <div class=" row">
              <div class=" col-12 grid-margin stretch-card">
                <div class=" card corona-gradient-card">
                  <div class="degrad card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="assets/images/dashboard/Group126@2x.png" class=" gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class=" col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0"> objectif  </h4>
                       
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>     
          
        
        <div class="row"  style="background-color: rgba(250, 253, 255, 0.897);" >
            <div class="col-12 grid-margin"  >
              <div class="card" style="margin-top: 3%; " >
                <div class="card-body" style="background-color: rgb(255, 255, 250);">
                  <h4 class="card-title" style="color: black;">Insertion objectif</h4>
                  <div class="table-responsive">
                    <table class="table" style="text-align: center;">
                    <form method="post" action="<?php echo site_url('objectif_controller/insert_objectif') ?>">
                        <tbody>
                            <tr>
                                <td>
                                    <div>
                                        <label for="nom">objectif :</label>
                                        <input style="background-color:#e8edf3;border-radius: 10px;color: black;" type="text" class="form-control"  placeholder="Nom du objectif" aria-label="objectif" id="nom" name="nom">
                                    </div>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-success">Ajouter</button>
                                </td>
                            </tr>
                        </tbody>
                    </form>
                    </table>
                  </div>
                </div>
                </div>
            </div>
          </div>
        
   
            <div class="row " style="margin-top: 3%; " >
                <div class="col-12 grid-margin"  >
                  <div class="card"  style="background-color: rgba(250, 253, 255, 0.764);" >
                    <div class="card-body" style="color:black" >
                      <h4 class="card-title" style="color:black">Listes objectifs</h4>
                      <div class="table-responsive" style="text-align: center;" >
                        <table class="table">
                          <thead>
                            <tr>
                              <th>
                                <div class="fontblack form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </th>
                              <th> Nom </th>
                              <th> Modifier </th>
                              <th> Supprimer </th>
                             
                            </tr>
                          </thead>
                          <tbody>
                          <?php foreach ($objectifs as $objectif) { ?>
                            <tr>
                                <td>
                                    <div class="form-check form-check-muted m-0">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                    </label>
                                    </div>
                                </td>
                                    <td><?php echo $objectif->nom; ?></td>
                                    <td><a  class="btn btn-info" href="modifier_objectif?idobjectif=<?php echo $objectif->id ?>&nom=<?php echo $objectif->nom ?>">Modifier</a></td>
                                    <td><a class="btn btn-danger" href="supprimer_objectif?idobjectif=<?php echo $objectif->id ?>">Supprimer</a> </td>
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          
            
         
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer" style="background-color: #e8edf3">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html> 

