<!DOCTYPE html>
<html>
<head>
	<title>Reservation</title>
	<script src="jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="tooltip.css">
	<script src="moment.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap-datetimepicker.css">
	<script src="bootstrap-datetimepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap-datetimepicker.css">
</head>
<body>
<!--Edit Modal-->
<div class="myModal" v-if="showEditModal">
	<div class="modalContainer">
		<div id="servers">
			<div class="editHeader">
				<span class="headerTitle">System Manager</span>
				<button class="closeEditBtn pull-right" @click="showEditModal = false">&times;</button>
			</div>
			<div class="modalBody">
				<div class="form-group">
					<label>Scheduler:</label>
					<select name="reservation" id="reservation" >
						<option>--Select--</option>
						<option value="create">Create Reservation</option>
						<option value="delete">Delete Reservation</option>
					</select>
					<button @click="callServer()">Submit</button>
				</div> 
		</div>
	</div>
</div>	
<script src="app.js"></script>
</body>	
</html>