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
    
    <!-- Edit Patient Modal -->
 @foreach($patients as $patient)
<div class="modal fade" id="editPatientModal{{ $patient->id }}" tabindex="-1" role="dialog" aria-labelledby="editPatientModalLabel{{ $patient->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPatientModalLabel{{ $patient->id }}">Edit Patient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.appointments.appointmentsUpdate', $patient->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="patientId{{ $patient->id }}" name="patientId" value="{{ $patient->id }}">
                    <div class="form-group">
                        <label for="editPatientName{{ $patient->id }}" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="editPatientName{{ $patient->id }}" name="name" value="{{ $patient->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="editPatientAge{{ $patient->id }}" class="col-form-label">Age:</label>
                        <input type="number" class="form-control" id="editPatientAge{{ $patient->id }}" name="age" value="{{ $patient->age }}" required>
                    </div>
                    <div class="form-group">
                        <label for="editPatientAddress{{ $patient->id }}" class="col-form-label">Address:</label>
                        <input type="text" class="form-control" id="editPatientAddress{{ $patient->id }}" name="address" value="{{ $patient->address }}" required>
                    </div>
                    <div class="form-group">
                        <label for="editPatientNumber{{ $patient->id }}" class="col-form-label">Number:</label>
                        <input type="text" class="form-control" id="editPatientNumber{{ $patient->id }}" name="phone" value="{{ $patient->phone }}" required>
                    </div>
                    <div class="form-group">
                        <label for="editPatientEmail{{ $patient->id }}" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" id="editPatientEmail{{ $patient->id }}" name="email" value="{{ $patient->email }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div> 
<div class="modal fade" id="deletePatientModal{{ $patient->id }}" tabindex="-1" role="dialog" aria-labelledby="deletePatientModalLabel{{ $patient->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletePatientModalLabel{{ $patient->id }}">Delete Patient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this patient?</p>
                <form action="{{ route('admin.appointments.appointmentsDestroy', $patient->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" id="deletePatientId{{ $patient->id }}" name="deletePatientId" value="{{ $patient->id }}">
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
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Patients</h4>
                    </div>
                    
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
                                        <th>#</th>
										<th>Name</th>
										<th>Age</th>
										<th>Address</th>
										<th>Phone</th>
										<th>Email</th>
										<th class="text-left">Action</th>
									</tr>
								</thead>
								<tbody>
                                @foreach($patients as $patient)
                                @csrf
                        <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->age }}</td>
                        <td>{{ $patient->address }}</td>
                        <td>{{ $patient->phone }}</td>
                        <td>{{ $patient->email }}</td>
                        <td class="text-left">
                <div class="dropdown dropdown-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-center">
                        <!-- <a class="dropdown-item" href="#" 
                           data-toggle="modal" 
                           data-target="#editPatientModal{{ $patient->id }}" 
                           data-id="{{ $patient->id }}" 
                           data-name="{{ $patient->name }}" 
                           data-age="{{ $patient->age }}"
                           data-address="{{ $patient->address }}"
                           data-phone="{{ $patient->phone }}"
                           data-email="{{ $patient->email }}">
                           <i class="fa fa-pencil m-r-5"></i> Edit
                        </a> -->
                        <a class="dropdown-item" href="#" 
                           data-toggle="modal" 
                           data-target="#deletePatientModal{{ $patient->id }}">
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
            
        </div>
		<div id="delete_patient" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this Patient?</h3>
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
							<button type="submit" class="btn btn-danger">Delete</button>
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
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>