<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../assert/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assert/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
 .main{
        display: grid;
        grid-template-columns: auto auto auto ;
        grid-template-rows: auto auto;
         }                  
</style>

<body id="page-top">

<div class="main">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SD <sup>*</sub></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Student Data</span></a>
            </li>

            <!-- Divider -->
            


            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Divider -->
            <hr class="sidebar-divider">


           <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="update.php" target="_blank">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Update</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

         

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-dark" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                   
                  

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Student Information</h1>
                        
                                
                    </div>
                    <div>
                    <?php 
require("connect.php");
$select ="SELECT * FROM `form`";
$info = mysqli_query($connect,$select);
if(mysqli_num_rows($info)){
?>
<div class="container-fluid">
    <table class="table table-dark table-striped">
        <thead>
            <th>ID</th>
            <th>Name </th>
            <th>Father Name</th>
            <th>Address</th>
            <th>Domicile</th>
            <th>Religion</th>
            <th>Email</th>
            <th>Trade</th>
            <th>Image</th>
            <th>Hobby</th>
            <th>Country</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($info)){  ?>
            <tr>
                <td><?php echo $row["ID"]; ?></td>
                <td><?php echo $row["Name"]; ?></td>
                <td><?php echo $row["Fname"]; ?></td>
                <td><?php echo $row["Address"]; ?></td>
                <td><?php echo $row["Domicile"]; ?></td>
                <td><?php echo $row["Religion"]; ?></td>
                <td><?php echo $row["Email"]; ?></td>
                <td><?php echo $row["Trade"]; ?></td>
                <td><img src="<?php echo $row["Image"]; ?>" width="150px" height="150px" alt=""></td>
                <td><?php echo $row["Hobby"]; ?></td>
                <td><?php echo $row["Country"]; ?></td>
                <td><a href="delete.php?id=<?php echo $row["ID"];?>" class="btn btn-danger">Delete</a></td>
                <td><a href="update.php?id=<?php echo $row["ID"];?>" class="btn btn-warning">Update</a></td>
            </tr>
            <?php  } ?>
        </tbody>
    </table>
</div>
<?php } ?>

                    </div>
                   
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
<!-- end .main container -->
</div>    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assert/vendor/jquery/jquery.min.js"></script>
    <script src="../assert/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assert/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assert/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assert/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assert/js/demo/chart-area-demo.js"></script>
    <script src="../assert/js/demo/chart-pie-demo.js"></script>

</body>

</html>