<?php session_start();
require_once '../../config/config.php';

//Get DB instance. function is defined in config.php
$db = getDbInstance();

//Get Dashboard information

include_once('../../includes/header.php');
?>
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
						<h4 class="box-title">Support Ticket List</h4>
						<h6 class="box-subtitle">List of ticket opend by customers</h6>
					</div>
					<div class="box-body">						
						<div class="table-responsive">
							<table id="tickets" class="table mt-0 table-hover no-wrap table-striped table-bordered" data-page-size="10">
								<thead>
									<tr class="bg-dark">
										<th>ID #</th>
										<th>Opened By</th>
										<th>Cust. Email</th>
										<th>Sbuject</th>
										<th>Status</th>
										<th>Assign to</th>
										<th>Date</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1011</td>
										<td>
											<a href="javascript:void(0)"><img src="../.././images/avatar/1.jpg" alt="user" class="avatar avatar-sm mr-5" /> Sophia</a>
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
											<a href="javascript:void(0)"><img src="../.././images/avatar/2.jpg" alt="user" class="avatar avatar-sm mr-5" /> William</a>
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
											<a href="javascript:void(0)"><img src="../.././images/avatar/3.jpg" alt="user" class="avatar avatar-sm mr-5" /> Jayden</a>
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
											<a href="javascript:void(0)"><img src="../.././images/avatar/4.jpg" alt="user" class="avatar avatar-sm mr-5" /> Ethan</a>
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
											<a href="javascript:void(0)"><img src="../.././images/avatar/5.jpg" alt="user" class="avatar avatar-sm mr-5" /> Noah</a>
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
											<a href="javascript:void(0)"><img src="../.././images/avatar/6.jpg" alt="user" class="avatar avatar-sm mr-5" /> Sophia</a>
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
											<a href="javascript:void(0)"><img src="../.././images/avatar/7.jpg" alt="user" class="avatar avatar-sm mr-5" /> William</a>
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
											<a href="javascript:void(0)"><img src="../.././images/avatar/8.jpg" alt="user" class="avatar avatar-sm mr-5" /> Jayden</a>
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
											<a href="javascript:void(0)"><img src="../.././images/avatar/9.jpg" alt="user" class="avatar avatar-sm mr-5" /> Ethan</a>
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
											<a href="javascript:void(0)"><img src="../.././images/avatar/2.jpg" alt="user" class="avatar avatar-sm mr-5" /> Noah</a>
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
											<a href="javascript:void(0)"><img src="../.././images/avatar/1.jpg" alt="user" class="avatar avatar-sm mr-5" /> Mia</a>
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
											<a href="javascript:void(0)"><img src="../.././images/avatar/3.jpg" alt="user" class="avatar avatar-sm mr-5" />Chloe</a>
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
											<a href="javascript:void(0)"><img src="../.././images/avatar/4.jpg" alt="user" class="avatar avatar-sm mr-5" /> Chloe</a>
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
											<a href="javascript:void(0)"><img src="../.././images/avatar/5.jpg" alt="user" class="avatar avatar-sm mr-5" /> Ethan</a>
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
											<a href="javascript:void(0)"><img src="../.././images/avatar/6.jpg" alt="user" class="avatar avatar-sm mr-5" /> Noah</a>
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
											<a href="javascript:void(0)"><img src="../.././images/avatar/7.jpg" alt="user" class="avatar avatar-sm mr-5" /> Sophia</a>
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
											<a href="javascript:void(0)"><img src="../.././images/avatar/8.jpg" alt="user" class="avatar avatar-sm mr-5" /> William</a>
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
											<a href="javascript:void(0)"><img src="../.././images/avatar/9.jpg" alt="user" class="avatar avatar-sm mr-5" /> Jayden</a>
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
											<a href="javascript:void(0)"><img src="../.././images/avatar/1.jpg" alt="user" class="avatar avatar-sm mr-5" /> Ethan</a>
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
											<a href="javascript:void(0)"><img src="../.././images/avatar/4.jpg" alt="user" class="avatar avatar-sm mr-5" /> Noah</a>
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

<?php include_once('../../includes/footer.php'); ?>