
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

<body id="page-top">

<div class="main">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-warning sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SD  <sup>*</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

          
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

              
                    <div>
                    <?php
require("connect.php");

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $select = "SELECT * FROM `form` WHERE ID = $id";
    $result = mysqli_query($connect,$select);
    $row = mysqli_fetch_assoc($result);
   
}
?>
<div class="container p-3">
    <div class="row">
        <div class="col">
        <div class="bg-warning text-white text-center rounded p-3  m-2  display-5"><h3>Update</h3></div>
            <form action="updateprogram.php" method="post" enctype="multipart/form-data">
                <div class="row mt-2">
                    <div class="col">
                        <!-- name -->
                <input type="hidden" name="id" class="form-control" value="<?php echo $row['ID']; ?>">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $row["Name"];?>" required>
                    </div>
                    <div class="col">
                        <!-- fname -->
                    <label for="" class="form-label">Father Name</label>
                    <input type="text" class="form-control" name="fname" value="<?php echo $row["Fname"];?>" required>
                    </div>
                    </div>
                    
                    <div class="row mt-2">
                        <div class="col">
                            <!-- address -->
                            <label for="" class="form-label">Address</label>
                            <textarea name="address" class="form-control" value="<?php echo $row["Address"];?>" required></textarea>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col">
                            <!-- age -->
                            <label for="" class="form-label">Age</label>
                            <input type="number" name="age" class="form-control" value="<?php echo $row["Age"];?>" required> 
                        </div>
                        <div class="col">
                            <!-- dob -->
                            <label for="" class="form-label">DOB</label>
                            <input type="date" name="dob" class="form-control" value="<?php echo $row["DOB"];?>" required> 
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col">
                            <!-- dom -->
                            <label for="" class="form-label">Domicile</label>
                            <input type="text" name="dom" class="form-control" value="<?php echo $row["Domicile"];?>" required>
                        </div>
                        <div class="col">
                            <!-- rel -->
                            <label for="" class="form-label">Religion</label>
                            <input type="text"name="rel" class="form-control" value="<?php echo $row["Religion"];?>" required>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col">
                            <!-- num -->
                             <label for="" class="form-label">Phone No</label>
                            <input type="number" name="num" class="form-control" value="<?php echo $row["Phone"];?>" required> 
                        </div>
                        <div class="col">
                            <!-- cnic -->
                            <label for="" class="form-label">Cnic No</label>
                            <input type="number" class="form-control" name="cnic" value="<?php echo $row["Cnic"];?>" required> 
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col">
                            <!-- email -->
                            <label for="" class="form-label">Email ID</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $row["Email"];?>" required>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col">
                            <!-- gender -->
                            <p>Gender</p>
                            <label for="" class="form-label">Male</label>
                            <input type="radio" class="form-radio-input" name="gender" value="Male" required >
                            <label for="" class="form-label">Female</label>
                            <input type="radio"  class="form-radio-input" name="gender" value="Female" required> 
                        </div>
                        <div class="col">
                            <!-- trade -->
                            <label for="" class="form-label">Trade</label>
                            <input type="text" name="trade" class="form-control" value="<?php echo $row["Trade"];?>" required>
                        </div>
                    </div>

                    
                    <div class="row mt-2">
                        <div class="col ml-2">
                            <!-- gender -->
                           <label for="">Hobbies</label><br>
                            <input type="checkbox" class="form-check-input" name="hoby[]" value="<?php echo $row["Hobby"];?>">Cricket &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" class="form-check-input" name="hoby[]" value="<?php echo $row["Hobby"];?>" >Editing &nbsp;&nbsp;&nbsp;&nbsp;
                            <br>
                            <input type="checkbox" class="form-check-input" name="hoby[]" value="<?php echo $row["Hobby"];?>" >Cooking &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" class="form-check-input" name="hoby[]" value="<?php echo $row["Hobby"];?>" >Dancing &nbsp;&nbsp;&nbsp;&nbsp; 
                            </div>
                        <div class="col">
                            <!-- trade -->
                            <label for="">Country</label>
                            <select name="dropdown" class="form-control">
                                <option selected disabled>Choose country</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Iran">Iran</option>
                                <option value="China">China</option>
                                <option value="Turkey">Turkey</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col">
                            <!-- img -->
                            <label for="" class="form-label">Image</label>
                            <input type="file" class="form-control-file" name="img" value="<?php echo $row["Image"];?>" required>
                        </div>
                    </div>
                    <!-- btn_submit -->
                    <input type="submit" value="Insert" class="btn btn-lg btn-outline-warning mt-3" name="btn_submit">
                    <!-- form end -->
                </form>
        </div>
    </div>
</div>
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