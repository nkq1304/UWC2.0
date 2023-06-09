<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI BackOfficer</title>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="../../../public/assets/bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../../../public/assets/css/backofficer/UI_BackOfficer.css">
    <link rel="stylesheet" type="text/css" href="../../../public/assets/css/backofficer/Style_EmployeeTable.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <div class="d-flex" style="height: 100%;">
        <!-- Sidebar Start -->
        <div class="col1 p-3" style="background-color: #d9e6ff;">
            <h4 class="mt-3 text-center" style="height: 20%;">TASK MANAGEMENT<br></h4>
            <ul class="list-group">
                <li class="list-group-item "><i class="bi bi-list-task me-2"></i>Over view</li>
                <li class="list-group-item actived"><i class="bi bi-columns me-2"></i>Dashboard</li>
            </ul>           
        </div>
        <!-- Sidebar End -->
        <div class="col2 p-4">
            <!-- Topbar Start -->
            <div class="row">
                <div class="col-md-4">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search in dashboard"
                                    style="border-radius: 20px 0 0 20px;background-color: #f5f5f5;">
                            <button class="btn border btn-outline-secondary" type="button"
                            style="border-radius: 0 20px 20px 0;background-color: #f5f5f5;">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-8">
                    <div class="align-items-center d-flex justify-content-end">
                        <i class="fas fa-bell me-4"></i>
                        <div class="inline-block me-4">
<<<<<<< HEAD:app/views/admin/index.php
                            <div style="font-weight: 500;"><?=$_SESSION['admin']['name']?></div>
=======
                            <div style="font-weight: 500;">Harry Maguire</div>
>>>>>>> 73fffb0de1bf3d19b8cb2728c1486e42db128551:View/html/backofficer/UI_DashBoard.php
                            <div>Back Officer</div>
                        </div>
                        <img src="../../../View/images/avt_user.jpg" alt="Avatar" class="avatar me-4">
                        <div>
<<<<<<< HEAD:app/views/admin/index.php
                            <form method="POST">
                                <button type="submit" name="logout_btn" value="1" class="nav-item nav-link" style="font-weight: 500;">
                                    <i class="bi bi-box-arrow-right text-dark"></i>
                                    Đăng xuất
                                </button>
                            </form>
=======
                    <a href="../login.php" class="nav-item nav-link" style="font-weight: 500;">
                        <i class="bi bi-box-arrow-right text-dark"></i>
                        Đăng xuất
                    </a>
>>>>>>> 73fffb0de1bf3d19b8cb2728c1486e42db128551:View/html/backofficer/UI_DashBoard.php
                </div>
                    </div>
                </div>
            </div>
            <!-- Topbar End -->

            <!-- Main Start -->
            <div class="row align-items-center">
                <div class="col-md-6 mt-4">
                    <h2>Dashboard</h2>
                </div>
            </div>
            <hr>
            <div class="row">
                <!-- Data Table Start -->
<<<<<<< HEAD:app/views/admin/index.php
                <?php $this->data_table(); ?>
=======
                    <?php require 'component/data_table.php'; ?>
>>>>>>> 73fffb0de1bf3d19b8cb2728c1486e42db128551:View/html/backofficer/UI_DashBoard.php
                <!-- Data Table End -->            
            </div>
            <!-- Main End -->
        </div>
    </div>
    <script src="../../../public/assets/scripts/employee_table.js"></script>
</body>
</html>