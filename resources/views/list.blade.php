<!doctype html>
<html lang="en">

<head>
	<title>Tables | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="#" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="tables.html" class="active"><i class="lnr lnr-dice"></i> <span>List User</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="page-title" style="margin-bottom: 0;">List Users</h3>
								</div>
								<div class="panel-body">
									<table id="example" class="table table-striped table-bordered" style="width:100%">
							            <thead>
							                <tr>
							                    <th>ID</th>
							                    <th>EMAIL</th>
							                    <th>FIRST NAME</th>
							                    <th>LAST NAME</th>
							                    <th>AVATAR</th>
							                    <th style="text-align: center;">ACTION</th>
							                </tr>
							            </thead>
							            <tbody>	
							            @foreach ($datas['data'] as $dataList)
							                <tr>
							                	<td>{{ $dataList['id']}}</td>
							                    <td>{{ $dataList['email']}}</td>
							                    <td>{{ $dataList['first_name']}}</td>
							                    <td>{{ $dataList['last_name']}}</td>
							                    <td>{{ $dataList['avatar']}}</td>
							                    <td style="text-align: center;"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter" data-id="{{ $dataList['id']}}">Detail</button>
												</td>
							                </tr>
							            @endforeach
							            </tbody>
							        </table>
							        <!-- Modal -->
										<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
										  <div class="modal-dialog modal-dialog-centered" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLongTitle"><b>Detail User</b></h5>
										      </div>
										      <div class="modal-body" style="width: 100%;">
										        <table>
										        	<tr>
										        		<td>Id</td>
										        		<td style="padding: 0 10px;">:</td>
										        		<td>{{ $dataList['id']}}</td>
										        	</tr>
										        	<tr>
										        		<td>Email</td>
										        		<td style="padding: 0 10px;">:</td>
										        		<td>{{ $dataList['email']}}</td>
										        	</tr>
										        	<tr>
										        		<td>First Name</td>
										        		<td style="padding: 0 10px;">:</td>
										        		<td>{{ $dataList['first_name']}}</td>
										        	</tr>
										        	<tr>
										        		<td>Last Name</td>
										        		<td style="padding: 0 10px;">:</td>
										        		<td>{{ $dataList['last_name']}}</td>
										        	</tr>
										        	<tr>
										        		<td>Avatar</td>
										        		<td style="padding: 0 10px;">:</td>
										        		<td>{{ $dataList['avatar']}}</td>
										        	</tr>
										        </table>

										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										      </div>
										    </div>
										  </div>
										</div>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>

	<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#example').DataTable();
		} );

		$('#exampleModalCenter').on('shown.bs.modal', function () {
		  $('#myInput').trigger('focus')
		})
	</script>
</body>

</html>
