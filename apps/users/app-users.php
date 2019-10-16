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

            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Users List</h4>
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
                                    <tr>
                                        <td>1011</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/1.jpg" alt="user" class="avatar avatar-sm mr-5" /> Sophia</a>
                                        </td>
                                        <td>sophia@gmail.com</td>
                                        <td>How to customize the template?</td>
                                        <td><span class="label label-warning">New</span> </td>
                                        <td>Elijah</td>
                                        <td>14-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1224</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/2.jpg" alt="user" class="avatar avatar-sm mr-5" /> William</a>
                                        </td>
                                        <td>william@gmail.com</td>
                                        <td>How to change colors</td>
                                        <td><span class="label label-success">Complete</span> </td>
                                        <td>Benjamin</td>
                                        <td>13-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1024</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/3.jpg" alt="user" class="avatar avatar-sm mr-5" /> Jayden</a>
                                        </td>
                                        <td>jayden@gmail.com</td>
                                        <td>How to set Horizontal nav</td>
                                        <td><span class="label label-success">Complete</span> </td>
                                        <td>Andrew</td>
                                        <td>13-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2124</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/4.jpg" alt="user" class="avatar avatar-sm mr-5" /> Ethan</a>
                                        </td>
                                        <td>ethan@gmail.com</td>
                                        <td>How this will connect with ethan</td>
                                        <td><span class="label label-inverse">Pending</span> </td>
                                        <td>Andrew</td>
                                        <td>12-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3124</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/5.jpg" alt="user" class="avatar avatar-sm mr-5" /> Noah</a>
                                        </td>
                                        <td>noah@gmail.com</td>
                                        <td>How to set navigation</td>
                                        <td><span class="label label-success">Complete</span> </td>
                                        <td>Andrew</td>
                                        <td>12-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1611</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/6.jpg" alt="user" class="avatar avatar-sm mr-5" /> Sophia</a>
                                        </td>
                                        <td>sophia@gmail.com</td>
                                        <td>How to customize the template?</td>
                                        <td><span class="label label-warning">New</span> </td>
                                        <td>Elijah</td>
                                        <td>14-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4224</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/7.jpg" alt="user" class="avatar avatar-sm mr-5" /> William</a>
                                        </td>
                                        <td>william@gmail.com</td>
                                        <td>How to change colors</td>
                                        <td><span class="label label-success">Complete</span> </td>
                                        <td>Benjamin</td>
                                        <td>13-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2524</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/8.jpg" alt="user" class="avatar avatar-sm mr-5" /> Jayden</a>
                                        </td>
                                        <td>jayden@gmail.com</td>
                                        <td>How to set Horizontal nav</td>
                                        <td><span class="label label-success">Complete</span> </td>
                                        <td>Andrew</td>
                                        <td>13-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7524</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/9.jpg" alt="user" class="avatar avatar-sm mr-5" /> Ethan</a>
                                        </td>
                                        <td>ethan@gmail.com</td>
                                        <td>How this will connect with ethan</td>
                                        <td><span class="label label-inverse">Pending</span> </td>
                                        <td>Andrew</td>
                                        <td>12-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4124</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/2.jpg" alt="user" class="avatar avatar-sm mr-5" /> Noah</a>
                                        </td>
                                        <td>noah@gmail.com</td>
                                        <td>How to set navigation</td>
                                        <td><span class="label label-success">Complete</span> </td>
                                        <td>Andrew</td>
                                        <td>12-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1011</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/1.jpg" alt="user" class="avatar avatar-sm mr-5" /> Mia</a>
                                        </td>
                                        <td>sophia@gmail.com</td>
                                        <td>How to customize the template?</td>
                                        <td><span class="label label-warning">New</span> </td>
                                        <td>Elijah</td>
                                        <td>14-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1224</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/3.jpg" alt="user" class="avatar avatar-sm mr-5" />Chloe</a>
                                        </td>
                                        <td>william@gmail.com</td>
                                        <td>How to change colors</td>
                                        <td><span class="label label-success">Complete</span> </td>
                                        <td>Benjamin</td>
                                        <td>13-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8024</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/4.jpg" alt="user" class="avatar avatar-sm mr-5" /> Chloe</a>
                                        </td>
                                        <td>jayden@gmail.com</td>
                                        <td>How to set Horizontal nav</td>
                                        <td><span class="label label-success">Complete</span> </td>
                                        <td>Andrew</td>
                                        <td>13-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5124</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/5.jpg" alt="user" class="avatar avatar-sm mr-5" /> Ethan</a>
                                        </td>
                                        <td>ethan@gmail.com</td>
                                        <td>How this will connect with ethan</td>
                                        <td><span class="label label-inverse">Pending</span> </td>
                                        <td>Andrew</td>
                                        <td>12-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3144</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/6.jpg" alt="user" class="avatar avatar-sm mr-5" /> Noah</a>
                                        </td>
                                        <td>noah@gmail.com</td>
                                        <td>How to set navigation</td>
                                        <td><span class="label label-success">Complete</span> </td>
                                        <td>Andrew</td>
                                        <td>12-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1621</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/7.jpg" alt="user" class="avatar avatar-sm mr-5" /> Sophia</a>
                                        </td>
                                        <td>sophia@gmail.com</td>
                                        <td>How to customize the template?</td>
                                        <td><span class="label label-warning">New</span> </td>
                                        <td>Elijah</td>
                                        <td>14-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4724</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/8.jpg" alt="user" class="avatar avatar-sm mr-5" /> William</a>
                                        </td>
                                        <td>william@gmail.com</td>
                                        <td>How to change colors</td>
                                        <td><span class="label label-success">Complete</span> </td>
                                        <td>Benjamin</td>
                                        <td>13-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2594</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/9.jpg" alt="user" class="avatar avatar-sm mr-5" /> Jayden</a>
                                        </td>
                                        <td>jayden@gmail.com</td>
                                        <td>How to set Horizontal nav</td>
                                        <td><span class="label label-success">Complete</span> </td>
                                        <td>Andrew</td>
                                        <td>13-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7524</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/1.jpg" alt="user" class="avatar avatar-sm mr-5" /> Ethan</a>
                                        </td>
                                        <td>ethan@gmail.com</td>
                                        <td>How this will connect with ethan</td>
                                        <td><span class="label label-inverse">Pending</span> </td>
                                        <td>Andrew</td>
                                        <td>12-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4124</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../../images/avatar/4.jpg" alt="user" class="avatar avatar-sm mr-5" /> Noah</a>
                                        </td>
                                        <td>noah@gmail.com</td>
                                        <td>How to set navigation</td>
                                        <td><span class="label label-success">Complete</span> </td>
                                        <td>Andrew</td>
                                        <td>12-10-2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<footer class="main-footer">
    &copy; 2019 All Rights Reserved.
</footer>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-light">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-birthday-cake bg-danger"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                            <p>Will be July 24th</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-user bg-warning"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                            <p>New Email : jhone_doe@demo.com</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-envelope-o bg-info"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                            <p>disha@demo.com</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-file-code-o bg-success"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Code Change</h4>

                            <p>Execution time 15 Days</p>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Web Design
                            <span class="label label-danger pull-right">40%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Update Data
                            <span class="label label-success pull-right">75%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-success" style="width: 75%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Order Process
                            <span class="label label-warning pull-right">89%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Development
                            <span class="label label-primary pull-right">72%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">General Settings</h3>

                <div class="form-group">
                    <input type="checkbox" id="report_panel" class="chk-col-grey" >
                    <label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

                    <p>
                        general settings information
                    </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <input type="checkbox" id="allow_mail" class="chk-col-grey" >
                    <label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

                    <p>
                        Other sets of options are available
                    </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <input type="checkbox" id="expose_author" class="chk-col-grey" >
                    <label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

                    <p>
                        Allow the user to show his name in blog posts
                    </p>
                </div>
                <!-- /.form-group -->

                <h3 class="control-sidebar-heading">Chat Settings</h3>

                <div class="form-group">
                    <input type="checkbox" id="show_me_online" class="chk-col-grey" >
                    <label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <input type="checkbox" id="off_notifications" class="chk-col-grey" >
                    <label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
                        Delete chat history
                    </label>
                </div>
                <!-- /.form-group -->
            </form>
        </div>
        <!-- /.tab-pane -->
    </div>
</aside>
<!-- /.control-sidebar -->

<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
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

<!-- Fab Admin for demo purposes -->
<script src="../../js/demo.js"></script>

<!-- Fab Admin for Data Table -->
<script src="../../js/pages/data-table.js"></script>


</body>
</html>
