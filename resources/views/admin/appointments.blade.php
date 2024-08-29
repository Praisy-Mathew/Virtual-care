<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Virtual Care- Admin</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!-- Add Appointment Modal -->
<div class="modal fade" id="addAppointmentModal" tabindex="-1" role="dialog" aria-labelledby="addAppointmentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addAppointmentModalLabel">Add Appointment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="addAppointmentForm">
            <div class="form-group">
              <label for="appointmentPatientName" class="col-form-label">Patient Name:</label>
              <input type="text" class="form-control" id="appointmentPatientName" name="appointmentPatientName" required>
            </div>
            <div class="form-group">
              <label for="appointmentAge" class="col-form-label">Age:</label>
              <input type="number" class="form-control" id="appointmentAge" name="appointmentAge" required>
            </div>
            <!-- <div class="form-group">
              <label for="appointmentDoctorName" class="col-form-label">Doctor Name:</label>
              <input type="text" class="form-control" id="appointmentDoctorName" name="appointmentDoctorName" required>
            </div> -->
            <div class="form-group">
              <label for="appointmentDepartment" class="col-form-label">Department:</label>
              <input type="text" class="form-control" id="appointmentDepartment" name="appointmentDepartment" required>
            </div>
            <div class="form-group">
              <label for="appointmentDate" class="col-form-label">Date:</label>
              <input type="date" class="form-control" id="appointmentDate" name="appointmentDate" required>
            </div>
            <div class="form-group">
              <label for="appointmentTime" class="col-form-label">Time:</label>
              <input type="time" class="form-control" id="appointmentTime" name="appointmentTime" required>
            </div>
            <div class="form-group">
              <label for="appointmentStatus" class="col-form-label">Status:</label>
              <select class="form-control" id="appointmentStatus" name="appointmentStatus" required>
                <option value="Completed">Completed</option>
                <option value="Cancelled">Pending</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Appointment</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Appointment Modal -->
  @foreach($appointments as $appointment)
<div class="modal fade" id="editAppointmentModal{{ $appointment->id }}" tabindex="-1" role="dialog" aria-labelledby="editAppointmentModalLabel{{ $appointment->id }}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editAppointmentModalLabel{{ $appointment->id }}">Edit Appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('admin.appointments.appointmentsUpdate', $appointment->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="editAppointmentName{{ $appointment->id }}" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="editAppointmentName{{ $appointment->id }}" name="name" value="{{ $appointment->name }}" required>
          </div>
          <div class="form-group">
            <label for="editAppointmentAge{{ $appointment->id }}" class="col-form-label">Age:</label>
            <input type="number" class="form-control" id="editAppointmentAge{{ $appointment->id }}" name="age" value="{{ $appointment->age }}" required>
          </div>
          
          <!-- <div class="form-group">
            <label for="editAppointmentDoctorName{{ $appointment->id }}" class="col-form-label">Doctor Name:</label>
            <input type="text" class="form-control" id="editAppointmentDoctorName{{ $appointment->id }}" name="doctor_name" value="{{ $appointment->doctor_name }}" required>
          </div> -->
          <div class="form-group">
            <label for="editAppointmentDepartment{{ $appointment->id }}" class="col-form-label">Department:</label>
            <input type="text" class="form-control" id="editAppointmentDepartment{{ $appointment->id }}" name="department" value="{{ $appointment->department }}" required>
          </div>
          <div class="form-group">
          <label for="editAppointmentDateTime{{ $appointment->id }}" class="col-form-label">Preferred Date and Time:</label>
          <input type="datetime-local" class="form-control" id="editAppointmentDateTime{{ $appointment->id }}" name="date_time" value="{{ old('date_time', \Carbon\Carbon::parse($appointment->date_time)->format('Y-m-d\TH:i')) }}" required>
            
          </div>
          <div class="form-group">
            <label for="editAppointmentNotes{{ $appointment->id }}" class="col-form-label">Any Specific Concerns or Notes:</label>
            <textarea class="form-control" id="editAppointmentNotes{{ $appointment->id }}" name="notes" rows="3">{{ $appointment->notes }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div> 

<div class="modal fade" id="deleteAppointmentModal{{ $appointment->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteAppointmentModalLabel{{ $appointment->id }}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteAppointmentModalLabel{{ $appointment->id }}">Delete Appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this appointment?</p>
      </div>
      <div class="modal-footer">
        <form action="{{ route('admin.appointments.appointmentsDestroy', $appointment->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach

  
    <div class="main-wrapper">
    @extends('layouts.app')
    @section('content')
        
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-5 col-5">
                        <h4 class="page-title">Appointments</h4>
                    </div>
                    
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped custom-table ">
								<thead>
									<tr>
										<th>#</th>
										<th>Patient Name</th>
										<th>Age</th>
										<th>Department</th>
										<th>Date & Time</th>
										<th class="text-left">Action</th>
									</tr>
								</thead>
								<tbody>
             @foreach ($appointments as $appointment)
             @csrf
                <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $appointment->name }}</td>
                <td>{{ $appointment->age }}</td>
                <!-- <td>{{ $appointment->doctor_name }}</td> -->
                <td>{{ $appointment->department }}</td>
                <td>{{ $appointment->date_time }}</td>
                <td>
        <div class="dropdown dropdown-action">
            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-ellipsis-v"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-center">
            <!-- <a class="dropdown-item" href="#" 
                   data-toggle="modal" 
                   data-target="#editAppointmentModal{{ $appointment->id }}" 
                   data-id="{{ $appointment->id }}" 
                   data-name="{{ $appointment->name }}" 
                   data-age="{{ $appointment->age }}"
                   data-doctor_name="{{ $appointment->doctor_name }}"
                   data-department="{{ $appointment->department }}"
                   data-date_time="{{ \Carbon\Carbon::parse($appointment->date_time)->format('Y-m-d\TH:i') }}"
                   data-notes="{{ $appointment->notes }}">
                   <i class="fa fa-pencil m-r-5"></i> Edit
                </a>  -->
                <a class="dropdown-item" href="#" 
                   data-toggle="modal" 
                   data-target="#deleteAppointmentModal{{ $appointment->id }}">
                   <i class="fa fa-trash-o m-r-5"></i> Delete
                </a>
            </div>
        </div> 
   </td>
    </tr>
  @endforeach
									
								</tbody>
							</table>
						</div>
					</div>
                </div>
            </div>
    
			<div id="delete_appointment" class="modal fade delete-modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body text-center">
							<img src="assets/img/sent.png" alt="" width="50" height="46">
							<h3>Are you sure want to delete this Appointment?</h3>
							<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    @endsection
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	   <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script> 
    <script src="assets/js/app.js"></script>
	<!-- <script>
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
				$('#datetimepicker4').datetimepicker({
                    format: 'LT'
                });
            });
     </script> -->
</body>


<!-- appointments23:20-->
</html>