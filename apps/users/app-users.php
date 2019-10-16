<?php
session_start();
require_once '../../config/config.php';
// Costumers class
require_once BASE_PATH . '/lib/Costumers/Costumers.php';
$db = getDbInstance();
$query = 'SELECT * FROM tbl_users;';
$rows = $db->query($query);
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data_to_db = array_filter($_POST);

    // Insert user and timestamp
    $data_to_db['created_by'] = $_SESSION['user_id'];
    $data_to_db['created_at'] = date('Y-m-d H:i:s');

    $db = getDbInstance();
    $last_id = $db->insert('tbl_users', $data_to_db);

    if ($last_id)
    {
        $_SESSION['success'] = 'Customer added successfully!';
        // Redirect to the listing page
        header('Location: apps/users/app-users.php');
        // Important! Don't execute the rest put the exit/die.
        exit();
    }
    else
    {
        echo 'Insert failed: ' . $db->getLastError();
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>Fab Admin - Dashboard  App Users </title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="../../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Data Table-->
    <link rel="stylesheet" type="text/css" href="../../assets/vendor_components/datatable/datatables.min.css"/>

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="../../css/bootstrap-extend.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../../css/master_style.css">

    <!-- Fab Admin skins -->
    <link rel="stylesheet" href="../../css/skins/_all-skins.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="hold-transition sidebar-mini fixed skin-blue">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="../../index.php" class="logo">
            <!-- mini logo -->
            <b class="logo-mini">
                <span class="light-logo"><img src="../../images/logo-light.png" alt="logo"></span>
                <span class="dark-logo"><img src="../../images/logo-dark.png" alt="logo"></span>
            </b>
            <!-- logo-->
            <span class="logo-lg">
          <img src="../../images/logo-light-text.png" alt="logo" class="light-logo">
          <img src="../../images/logo-dark-text.png" alt="logo" class="dark-logo">
        </span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar">

            <!-- sidebar menu-->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="user-profile treeview">
                    <a href="href="../../index.php"">
                    <img src="../../images/user5-128x128.jpg" alt="user">
                    <span>Juliya Brus</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="javascript:void()"><i class="fa fa-user mr-5"></i>My Profile </a></li>
                        <li><a href="javascript:void()"><i class="fa fa-money mr-5"></i>My Balance</a></li>
                        <li><a href="javascript:void()"><i class="fa fa-envelope-open mr-5"></i>Inbox</a></li>
                        <li><a href="javascript:void()"><i class="fa fa-cog mr-5"></i>Account Setting</a></li>
                        <li><a href="javascript:void()"><i class="fa fa-power-off mr-5"></i>Logout</a></li>
                    </ul>
                </li>
                <li class="header nav-small-cap">PERSONAL</li>
                <li class="active">
                    <a href="../../index.php">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-th"></i>
                        <span>App</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../../apps/users/app-users.php"><i class="fa fa-circle-thin"></i>Users</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Users
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="#">App</a></li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <?php include BASE_PATH . '/includes/flash_messages.php'; ?>
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Users List</h4>
                            <div class="page-action-links text-right">
                                <a data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Add new</a>
                            </div>
                        </div>
                        <div class="col-lg-12">

                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="tickets" class="table mt-0 table-hover no-wrap table-striped table-bordered" data-page-size="10">
                                    <thead>
                                    <tr class="bg-dark">
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone No</th>
                                        <th>Note</th>
                                        <th>Created By</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($rows as $row): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($row['first_name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['last_name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['user_email']); ?></td>
                                        <td><?php echo htmlspecialchars($row['phone_no']); ?></td>
                                        <td><?php echo htmlspecialchars($row['note']); ?></td>
                                        <td><?php echo htmlspecialchars($row['created_by']); ?></td>
                                        <td><?php echo htmlspecialchars($row['created_date']); ?></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-target="#confirm-delete-<?php echo $row['id']; ?>" data-toggle="modal" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <!-- Delete Confirmation Modal -->
                                    <div class="modal center-modal fade" id="confirm-delete-<?php echo $row['id']; ?>" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Confirm</h5>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="delete_customer.php" method="POST">
                                                        <!-- Modal content -->
                                                        <input type="hidden" name="del_id" id="del_id" value="<?php echo $row['id']; ?>">
                                                        <p>Are you sure you want to delete this row?</p>
                                                    </form>
                                                </div>
                                                <div class="modal-footer modal-footer-uniform">
                                                    <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">No</button>
                                                    <button type="submit" class="btn btn-bold btn-pure btn-primary float-right">Yes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //Delete Confirmation Modal -->

                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Add New User</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form action="/apps/users/app_users.php" method="POST">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="example_input_first_name">First Name:</label>
                                        <input type="text" name="first_name" class="form-control" placeholder="Enter first name">
                                    </div>
                                    <div class="form-group">
                                        <label for="example_input_last_name">Last Name:</label>
                                        <input type="text" name="last_name" class="form-control" placeholder="Enter last name">
                                    </div>
                                    <div class="form-group">
                                        <label>Email address:</label>
                                        <input type="email" name="user_email" class="form-control" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone No:</label>
                                        <input type="tel" name="phone_no" class="form-control" placeholder="Phone number">
                                    </div>
                                    <div class="form-group">
                                        <label>Note:</label>
                                        <input type="text" name="note" class="form-control" placeholder="Note">
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success pull-right">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<footer class="main-footer">
    &copy; 2019 All Rights Reserved.
</footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

<!-- popper -->
<script src="../../assets/vendor_components/popper/dist/popper.min.js"></script>

<!-- Bootstrap 4.0-->
<script src="../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- This is data table -->
<script src="../../assets/vendor_components/datatable/datatables.min.js"></script>

<!-- SlimScroll -->
<script src="../../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<!-- FastClick -->
<script src="../../assets/vendor_components/fastclick/lib/fastclick.js"></script>

<!-- Fab Admin App -->
<script src="../../js/template.js"></script>
<!---->
<!-- Fab Admin for demo purposes -->
<script src="../../js/demo.js"></script>

<!-- Fab Admin for Data Table -->
<script src="../../js/pages/data-table.js"></script>


</body>
</html>
