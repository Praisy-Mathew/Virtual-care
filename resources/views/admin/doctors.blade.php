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
    <!-- Add Doctor Modal -->
    <div class="modal fade" id="addDoctorModal" tabindex="-1" role="dialog" aria-labelledby="addDoctorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDoctorModalLabel">Add Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.doctors.doctorsStore') }}" method="POST" id="addDoctorForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="department" class="col-form-label">Department:</label>
                         <select id="department" name="department" class="form-control" required>
                         @foreach($departments as $department) 
                           <option value="{{ $department->id }}">{{ $department->name }}</option>
                       @endforeach 
                   </select> 
                         <!-- <input type="text" class="form-control" id="department" name="department" required> -->
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-form-label">Image:</label>
                        <input type="file" class="form-control-file" id="image" name="image" required>
                    </div>
                    <div class="form-group">
                        <label for="location" class="col-form-label">Location:</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Doctor</button>
                </form>
            </div>
        </div>
    </div>
</div>

   <!-- Edit doctor modal -->
  @foreach($doctors as $doctor)
  <div class="modal fade" id="editDoctorModal{{ $doctor->id }}" tabindex="-1" role="dialog" aria-labelledby="editDoctorModalLabel{{ $doctor->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editDoctorModalLabel{{ $doctor->id }}">Edit Doctor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('admin.doctors.doctorsUpdate', $doctor->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="doctorId" value="{{ $doctor->id }}">
            <div class="form-group">
              <label for="editDoctorName{{ $doctor->id }}" class="col-form-label">Name:</label>
              <input type="text" class="form-control" id="editDoctorName{{ $doctor->id }}" name="name" value="{{ $doctor->name }}" required>
            </div>
            <div class="form-group">
              <label for="editDoctorDepartment{{ $doctor->id }}" class="col-form-label">Department:</label>
              <select id="editDoctorDepartment{{ $doctor->id }}" name="department" class="form-control" required>
              @foreach($departments as $department)
              <option value="{{ $department->id }}" {{ $doctor->department == $department->id ? 'selected' : '' }}>{{ $department->name }}
              </option>
              @endforeach
              </select>
              <!-- <input type="text" class="form-control" id="editDoctorDepartment{{ $doctor->id }}" name="department" value="{{ $doctor->department }}" required> -->
            </div>
            <div class="form-group">
              <label for="editDoctorPhoto{{ $doctor->id }}" class="col-form-label">Photo:</label>
              <input type="file" class="form-control-file" id="editDoctorPhoto{{ $doctor->id }}" name="image">
            </div>
            <div class="form-group">
              <label for="editDoctorLocation{{ $doctor->id }}" class="col-form-label">Location:</label>
              <input type="text" class="form-control" id="editDoctorLocation{{ $doctor->id }}" name="location" value="{{ $doctor->location }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Doctor Modal -->
  <div class="modal fade" id="deleteDoctorModal{{ $doctor->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteDoctorModalLabel{{ $doctor->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteDoctorModalLabel{{ $doctor->id }}">Delete Doctor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('admin.doctors.doctorsDestroy', $doctor->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <p>Are you sure you want to delete {{ $doctor->name }}?</p>
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
                        <h4 class="page-title">Doctors</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add-doctor.html" class="btn btn-primary btn-rounded float-right" data-toggle="modal" data-target="#addDoctorModal" ><i class="fa fa-plus"></i> Add Doctor</a>
                    </div>
                </div>
				<div class="row doctor-grid">
                @foreach($doctors as $doctor)
                    <div class="col-md-4 col-sm-4  col-lg-6">
                        <div class="profile-widget">
                            <div class="doctor-img">
                                <a class="avatar" href=""><img alt="" src="{{ Storage::url($doctor->image) }}"></a>
                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editDoctorModal{{ $doctor->id }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteDoctorModal{{ $doctor->id }}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                               
                                </div>
                             </div>
                            <h4 class="doctor-name text-ellipsis"><a href="">{{ $doctor->name }}</a></h4>
                            <div class="doc-prof">
                            @php
                              $department = \App\Models\Department::find($doctor->department);
                            @endphp
                          {{ $department ? $department->name : 'Department not available' }}
                           </div>
                             
                            <div class="user-country">
                                <i class="fa fa-map-marker"></i>{{ $doctor->location}}
                            </div>
</div>
</div>
                            @endforeach
</div>
</div>

                    
            
      
        </div>
		<div id="delete_doctor" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this Doctor?</h3>
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
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- doctors23:17-->
</html>