<?php 	
	session_start();
	// echo $_SESSION['full_name'];
	$conn = new mysqli("localhost", "root", "", "crud");
 
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
		header('location:index.php');
	} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Server Details</title>
	<script src="jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="tooltip.css">
	<link rel="stylesheet" type="text/css" href="calender.css">
	<link rel="stylesheet" type="text/css" href="table.css">
	<script src="moment.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap-datetimepicker.css">
	<script src="bootstrap-datetimepicker.min.js"></script>
	<script src="select.js"></script>
	
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Server Manager</h1>
	<button type="button" class="btn btn-success">Welcome!!<?php echo $_SESSION['full_name']; ?></button>
	<div id="servers">
		<div class="col-md-8 col-md-offset-2">
			<div class="row">
				<div class="col-md-12">
					<h2>Server List
					<button style="margin-left: 10px;" class="btn btn-primary pull-right" @click="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</button>			
					</h2>
				</div>
			</div>
			<div class="alert alert-danger text-center" v-if="errorMessage">
				<button type="button" class="close" @click="clearMessage();"><span aria-hidden="true">&times;</span></button>
				<span class="glyphicon glyphicon-alert"></span> {{ errorMessage }}
			</div>
			
			<div class="alert alert-success text-center" v-if="successMessage">
				<button type="button" class="close" @click="clearMessage();"><span aria-hidden="true">&times;</span></button>
				<span class="glyphicon glyphicon-ok"></span> {{ successMessage }}
			</div>
			

			<table class="table table-bordered">
				<thead>
					<th>S.No</th>
					<th>Server Name</th>
					<th>Server IP</th>
					<th>Server Details</th>
					<th>Last Updated</th>
					<th> Action</th>
				</thead>
				<tbody>
					<tr v-for="server in server_details">
						<td align="center">{{ server.id }}</td>
						<td align="center"><a href="" data-toggle="tooltip" onmouseover="displayTitle(this)" >{{ server.server_name }} <span style="display:None" >{{ server.fw_info }} </a></a></td>
						
						<td align="center">{{ server.server_ip }}</td>
						<td align="center">{{ server.server_details }}</td>
						<td align="center"> by {{ server.full_name }}</td>
						<td align="center"><button class="btn btn-success" @click="showEditModal = true; selectServer(server);"><span class="glyphicon glyphicon-edit"></span> Edit</button> 
 							
			

						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<?php include('modal.php'); ?> 
		
			
	</div>
</div>
<script src="vue.js"></script>
<script src="axios.js"></script>
<script src="app.js"></script>
			<script>
			function displayTitle(x)
			{
			x.title = x.getElementsByTagName('span')[0].innerHTML;
			}
			</script>
</body>
</html>