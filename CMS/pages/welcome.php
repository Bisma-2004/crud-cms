<?php
session_start();
if (empty($_SESSION['emaill'])) {
    header("Location: ../index.php");
    exit();
}else{

?>
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom styles for this template-->
    <link href="../assert/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>


<body id="page-top">

<div class="main">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard1.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
            </a>  
            
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                    <a class="nav-link" href="logout.php" onclick="return confirm('Are you sure you want to logout?')">
                        <i class="bi bi-box-arrow-right fa-lg" ></i>
                        <span>Logout</span>
                    </a>
                </li>
        </ul>
       
        
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
                    <h1>Enter Your Data Here...</h1>   
                    
                    <div class="ml-auto">
                            <a href="logout.php" onclick="return confirm('Are you sure you want to logout?')">
                                <i class="bi bi-box-arrow-right fa-lg mr-2" style="color : black"></i></a>   
                    </div>
                </nav>
                <?php if(isset($_GET["Success"])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                                <strong>Success : </strong> <?php echo $_GET["Success"];?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php } ?>

<div class="container-fluid  ">
       <!-- alert for update -->
                

    <div class="row">
        <div class="col">
        <div class="bg-dark text-white text-center rounded p-4 m-2 display-5"><h3>Admission form</h3></div>
            <form action="progarm.php" method="post" enctype="multipart/form-data">
                <div class="row mt-2">
                    <div class="col">
                        <!-- name -->
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="name" required>
                    </div>
                    <div class="col">
                        <!-- fname -->
                    <label for="" class="form-label">Father Name</label>
                    <input type="text" class="form-control" name="fname" placeholder="father name" required>
                    </div>
                    </div>
                    
                    <div class="row mt-2">
                        <div class="col">
                            <!-- address -->
                            <label for="" class="form-label">Address</label>
                            <textarea name="address" class="form-control" required></textarea>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col">
                            <!-- age -->
                            <label for="" class="form-label">Age</label>
                            <input type="number" name="age" class="form-control" required> 
                        </div>
                        <div class="col">
                            <!-- dob -->
                            <label for="" class="form-label">DOB</label>
                            <input type="date" name="dob" class="form-control" required> 
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col">
                            <!-- dom -->
                            <label for="" class="form-label">Domicile</label>
                            <input type="text" name="dom" class="form-control" placeholder="...." required>
                        </div>
                        <div class="col">
                            <!-- rel -->
                            <label for="" class="form-label">Religion</label>
                            <input type="text"name="rel" class="form-control" placeholder="...." required>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col">
                            <!-- num -->
                             <label for="" class="form-label">Phone No</label>
                            <input type="number" placeholder="Number" name="num" class="form-control" required> 
                        </div>
                        <div class="col">
                            <!-- cnic -->
                            <label for="" class="form-label">Cnic No</label>
                            <input type="number" class="form-control" name="cnic" placeholder="don't add dash" required> 
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col">
                            <!-- email -->
                            <label for="" class="form-label">Email ID</label>
                            <input type="email" name="email" class="form-control" placeholder="abc@gmail.com" required>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col">
                            <!-- gender -->
                            <p>Gender</p>
                            <label for="" class="form-label">Male</label>
                            <input type="radio" class="form-radio-input" name="gender" value="Male" required>
                            <label for="" class="form-label">Female</label>
                            <input type="radio"  class="form-radio-input" name="gender" value="Female" required> 
                        </div>
                        <div class="col">
                            <!-- trade -->
                            <label for="" class="form-label">Trade</label>
                            <input type="text" placeholder="Course name" name="trade" class="form-control" required>
                        </div>
                    </div>

                    
                    <div class="row mt-2">
                        <div class="col ml-3">
                            <!-- gender -->
                            <label for="">Hobbies</label><br>
                            <input type="checkbox" class="form-check-input" name="hoby[]" value="Cricket" >Cricket &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" class="form-check-input" name="hoby[]" value="Editing" >Editing &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <br>
                            <input type="checkbox" class="form-check-input" name="hoby[]" value="Cooking" >Cooking &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" class="form-check-input" name="hoby[]" value="Dancing" >Dancing &nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="was-validated">

                            </span>
                            </div>
                         <div class="col ">
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
                            <input type="file" class="form-control-file" name="img" required>
                        </div>
                    </div>
                    <!-- btn_submit -->
                    <input type="submit" class="btn btn-lg btn-outline-dark mt-3" name="btn_submit"> 
                    <a href="data.php" class="btn btn-outline-primary mt-3 btn-lg">View Record</a>
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
<?php } ?>