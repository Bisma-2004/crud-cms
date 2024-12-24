<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.7/css/dataTables.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
<title>Title</title>
</head>
<body>
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
                    <a href="delete.php?id=<?php echo $row['ID']; ?>" class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
                    <a href="update.php?id=<?php echo $row['ID']; ?>" class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
                    <a href="read.php" class="btn btn-outline-light"><i class="bi bi-plus"></i></a>
                   </td>
                </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>
    <?php } ?>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-buttons/3.1.2/js/dataTables.buttons.min.js" integrity="sha512-QryCmK0Wa3Z39ENpuGWLnm50JgyuqoabrElWoprdAy9hwaqOnXrl+FhipaB2iCHRseSwIpmxzThgZsn7n2cp7Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-buttons/3.1.2/js/buttons.colVis.min.js" integrity="sha512-Aco2AZMfg/w1xDL6ym1XZa0ghs/l66pUEOmmhQJ0Pd5BmgDgNWUncB1wyUO6dRm7MDf5WvO7AhKGtBfb+sYmgg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-buttons/3.1.2/js/buttons.html5.min.js" integrity="sha512-ggVZyunC6fdldMB1GOvn7LPoMN9EeLoy9xrwmbfKAiM1y/CHSVwy6OaE2EbI1NkChg1ti0t6Dpv4FWZ9Md8xYQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-buttons/3.1.2/js/buttons.print.min.js" integrity="sha512-2Z5DG21Mo9I7ETDi1R4T5yK24NDuxcRCD6smo47+kImienWgFdBU5mg0cyLGaMwDitjb9UskfUEtji67if3Xnw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.12/pdfmake.min.js" integrity="sha512-axXaF5grZBaYl7qiM6OMHgsgVXdSLxqq0w7F4CQxuFyrcPmn0JfnqsOtYHUun80g6mRRdvJDrTCyL8LQqBOt/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.12/vfs_fonts.min.js" integrity="sha512-EFlschXPq/G5zunGPRSYqazR1CMKj0cQc8v6eMrQwybxgIbhsfoO5NAMQX3xFDQIbFlViv53o7Hy+yCWw6iZxA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js" integrity="sha512-XMVd28F1oH/O71fzwBnV7HucLxVwtxf26XV8P4wPk26EDxuGZ91N8bsOttmnomcCD3CS5ZMRL50H0GgOHvegtg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Optional JavaScript -->
<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $('#myTable').DataTable({
            dom: 'Bftrip',
            buttons: ['copy','print','pdf','excel','csv']
        });
    });
</script>
</body>
</html>
!