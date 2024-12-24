<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Dashboard</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.7/css/dataTables.dataTables.min.css">
    
    <!-- FontAwesome and other custom fonts -->
    <link href="../assert/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assert/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div class="main">
        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">SD <sup>*</sup></div>
                </a>

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="data.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Student Data</span>
                    </a>
                </li>

                
                <li class="nav-item active">
                    <a class="nav-link" href="welcome.php">
                    <i class="bi bi-file-earmark-fill fa-lg"></i>
                        <span>Form</span>
                    </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="logout.php" onclick="return confirm('Are you sure ?')">
                        <i class="bi bi-box-arrow-right fa-xl " ></i>
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
                    <div class="d-sm-flex align-items-center justify-content-between mt-3">
                            <h1 class="h3 mb-0 text-gray-800">Student Information</h1>
                        </div>
                    <!-- Navbar - User -->
                <div class="ml-auto">
                    <a href="logout.php" onclick="return confirm('Are you sure you want to logout?')">
                        <i class="bi bi-box-arrow-right fa-lg" style="color : black"></i>
                    </a>   
                </div>
            </nav>


                    <!-- Begin Page Content -->
                     <!-- alert for delete -->
                    <div class="container-fluid">
                        <?php if(isset($_GET["Alert"])) { ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Alert : </strong> <?php echo $_GET["Alert"];?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php } ?>

                        <!-- alert for update -->
                        <?php if(isset($_GET["alert"])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Alert : </strong> <?php echo $_GET["alert"];?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php } ?>

                        

                        <div>
                            <?php 
                            require("connect.php");
                            $select ="SELECT * FROM `form`";
                            $info = mysqli_query($connect,$select);
                            if(mysqli_num_rows($info)){
                            ?>
                            <div class="container-fluid pt-5">
                                <table class="table table-dark table-striped" id="myTable">
                                    <thead>
                                        <th>ID</th>
                                        <th>Name </th>
                                        <th>Father Name</th>
                                        <th>Email</th>
                                        <th>Action</th>       
                                    </thead>
                                    <tbody>
                                        <?php while($row = mysqli_fetch_assoc($info)){  ?>
                                        <tr>
                                            <td><?php echo $row["ID"]; ?></td>
                                            <td><?php echo $row["Name"]; ?></td>
                                            <td><?php echo $row["Fname"]; ?></td>
                                            <td><?php echo $row["Email"]; ?></td>
                                            <td>
                                                <a href="delete.php?id=<?php echo $row['ID']; ?>" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this?')"><i class="bi bi-trash"></i></a>
                                                <a href="update.php?id=<?php echo $row['ID']; ?>" class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
                                                <a href="welcome.php" class="btn btn-outline-light"><i class="bi bi-plus"></i></a>
                                            </td>
                                        </tr>
                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>

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
        </div>

    </div>  

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- DataTables and Buttons JS -->
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-buttons/3.1.2/js/dataTables.buttons.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-buttons/3.1.2/js/buttons.html5.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-buttons/3.1.2/js/buttons.print.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.12/pdfmake.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.12/vfs_fonts.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js" crossorigin="anonymous"></script>

    <style>
    .dataTables_filter {
        float: right; /* Moves the search input field to the right */
    }
</style>
    <!-- DataTable initialization -->
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                dom: 'Bftrip',
                buttons: ['copy', 'print', 'pdf', 'excel', 'csv']
            });
        });
    </script>

</body>

</html>
