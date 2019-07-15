<!-- Edit Modal -->
<div class="myModal" v-if="showEditModal">
	<div class="modalContainer">
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
			<div class="form-group">	
				<label>Server Name:</label>
				<input type="text" class="form-control" disabled v-model="clickServer.server_name">
			</div>
			<div class="form-group">
				<label>Server IP:</label>
				<input type="text" class="form-control" disabled v-model="clickServer.server_ip">
			</div>
<!-- Lined Picker -->
			
			<div class="form-group">
			
				<label>From:</label>
					<div class='input-group date' id='datetimepicker6'>
						<input type='text' class="form-control" v-model="clickServer.start_time" />
						<span @click="callDatePicker();" class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
			</div>
			<div class="form-group">
				<label>To:</label>
					<div class='input-group date' id='datetimepicker7'>
						<input type='text' class="form-control" v-model="clickServer.end_time" />
						<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>  
						<button><span class="glyphicon glyphicon-time"></span>(GMT+5.30)</button>
						</span>
					</div>
			</div>
			
				<label>Time Slot:</label>
			</div>	
			
			<table>
			
			<tbody>
				<tr id="originalTime">
					<td>   12am		</td>
					<td>	1am		</td>
					<td>	2am		</td>
					<td>	3am  	</td>
					<td>	4am  	</td>
					<td>	5am 	</td>
					<td>	6am 	</td>
					<td>	7am 	</td>
					<td>	8am 	</td>
					<td>	9am   	</td>
					<td>   10am	  	</td>
					<td>   11am 	</td>
					<td>   12pm		</td>
					<td>	1pm 	</td>
					<td>	2pm 	</td>
					<td>	3pm  	</td>
					<td>	4pm  	</td>
					<td>	5pm 	</td>
					<td>	6pm 	</td>
					<td>	7pm     </td>
					<td>	8pm		</td>
					<td>	9pm	  	</td>
					<td>   10pm	  	</td>
					<td>   11pm 	</td>
				</tr>
				<tr id="mappingTime">
					<td>		</td>
					<td>		</td>
					<td>		</td>
					<td>	  	</td>
					<td>	  	</td>
					<td>		</td>
					<td>		</td>
					<td>		</td>
					<td>		</td>
					<td>	  	</td>
					<td>	  	</td>
					<td>		</td>
					<td>		</td>
					<td>		</td>
					<td>		</td>
					<td>	  	</td>
					<td>	  	</td>
					<td>		</td>
					<td>		</td>
					<td>		</td>
					<td>		</td>
					<td>	  	</td>
					<td>	  	</td>
					<td>		</td>
				</tr>
			</tbody>
			</table>
			
			<button onclick="callSelect()">Click me</button>
		</div>
		<hr>
		<div class="modalFooter">
			<div class="footerBtn pull-right">
				<button class="btn btn-default" @click="showEditModal = false"><span
						class="glyphicon glyphicon-remove"></span> Cancel</button> <button class="btn btn-success"
					@click="showEditModal = false; updateServer();"><span class="glyphicon glyphicon-click"></span>
					Save</button>
			</div>
		</div>
	</div>
</div>