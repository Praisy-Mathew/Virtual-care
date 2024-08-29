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
    <!-- Add Department Modal -->
    <div class="modal fade" id="addDepartmentModal" tabindex="-1" role="dialog" aria-labelledby="addDepartmentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDepartmentModalLabel">Add Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.departments.departmentsStore') }}" method="POST" id="addDepartmentForm">
                    @csrf
                    <div class="form-group">
                        <label for="departmentName" class="col-form-label">Department Name:</label>
                        <input type="text" class="form-control" id="departmentName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="departmentIcon" class="col-form-label">Icon (Font Awesome class):</label>
                        <select class="form-control" id="departmentIcon" name="icon" required>
                        <option value="fas fa-ambulance (Emergency)">Ambulance (Emergency)</option>
                        <option value="fas fa-heartbeat (Cardiology)">Heartbeat (Cardiology/Emergency)</option>
                        <option value="fas fa-bone (Orthopaedics)">Bone (Orthopaedics)</option>
                         <option value="fas fa-female (Gynaecology)">Female (Gynaecology)</option>
                        <option value="fas fa-child (Pediatrics)">Child (Pediatrics)</option>
                        <option value="fas fa-brain (Neurology)">Brain (Neurology)</option>
                        <option value="fas fa-ribbon (Oncology)">Ribbon (Oncology)</option>
                       <option value="fas fa-x-ray (Radiology)">X-Ray (Radiology)</option>
                      <option value="fas fa-flask (Pathology)">Flask (Pathology)</option>
                     <option value="fas fa-tools (Surgery)">Tools (Surgery)</option>
                    <option value="fas fa-stethoscope (Internal Medicine)">Stethoscope (Internal Medicine)</option>
                    <option value="fas fa-eye (Ophthalmology)">Eye (Ophthalmology)</option>
                    <option value=" fas fa-head-side-cough(ENT)">Ear (ENT)</option>
                     <option value="fas fa-hands (Dermatology)">Skin (Dermatology)</option>
                     <option value="fas fa-tint (Urology)">Tint (Urology)</option>
                 </select>

                        <!-- <input type="text" class="form-control" id="departmentIcon" name="icon" required> -->

                    </div>
                    <div class="form-group">
                        <label for="departmentDescription" class="col-form-label">Description:</label>
                        <textarea class="form-control" id="departmentDescription" name="description" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Department</button>
                </form>
            </div>
        </div>
    </div>
</div>

  
  <!-- Edit Department Modal -->
  
  @foreach($departments as $department)
  <div class="modal fade" id="editDepartmentModal{{ $department->id }}" tabindex="-1" role="dialog" aria-labelledby="editDepartmentModalLabel{{ $department->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editDepartmentModalLabel{{ $department->id }}">Edit Department</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('admin.departments.departmentsUpdate', $department->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="editDepartmentName{{ $department->id }}" class="col-form-label">Name:</label>
              <input type="text" class="form-control" id="editDepartmentName{{ $department->id }}" name="name" value="{{ $department->name }}" required>
            </div>
            <div class="form-group">
              <label for="editDepartmentIcon{{ $department->id }}" class="col-form-label">Icon:</label>
              <select class="form-control" id="departmentIcon" name="icon" value="{{ $department->icon }}" required>
              <option value="fas fa-ambulance" {{ $department->icon == 'fas fa-ambulance' ? 'selected' : '' }}>Ambulance (Emergency)</option>
                <option value="fas fa-heartbeat" {{ $department->icon == 'fas fa-heartbeat' ? 'selected' : '' }}>Heartbeat (Cardiology/Emergency)</option>
                <option value="fas fa-bone" {{ $department->icon == 'fas fa-bone' ? 'selected' : '' }}>Bone (Orthopaedics)</option>
                <option value="fas fa-female" {{ $department->icon == 'fas fa-female' ? 'selected' : '' }}>Female (Gynaecology)</option>
                <option value="fas fa-child" {{ $department->icon == 'fas fa-child' ? 'selected' : '' }}>Child (Pediatrics)</option>
                <option value="fa fa-smile" {{ $department->icon == 'fa fa-smile' ? 'selected' : '' }}>Smile (Pediatrics)</option>
                <option value="fas fa-brain" {{ $department->icon == 'fas fa-brain' ? 'selected' : '' }}>Brain (Neurology)</option>
                <option value="fas fa-ribbon" {{ $department->icon == 'fas fa-ribbon' ? 'selected' : '' }}>Ribbon (Oncology)</option>
                <option value="fas fa-x-ray" {{ $department->icon == 'fas fa-x-ray' ? 'selected' : '' }}>X-Ray (Radiology)</option>
                <option value="fas fa-flask" {{ $department->icon == 'fas fa-flask' ? 'selected' : '' }}>Flask (Pathology)</option>
                <option value="fas fa-tools" {{ $department->icon == 'fas fa-tools' ? 'selected' : '' }}>Tools (Surgery)</option>
                <option value="fas fa-stethoscope" {{ $department->icon == 'fas fa-stethoscope' ? 'selected' : '' }}>Stethoscope (Internal Medicine)</option>
                <option value="fas fa-eye" {{ $department->icon == 'fas fa-eye' ? 'selected' : '' }}>Eye (Ophthalmology)</option>
                <option value="fas fa-head-side-cough" {{ $department->icon == 'fas fa-head-side-cough' ? 'selected' : '' }}>Ear (ENT)</option>
                <option value="fas fa-hands" {{ $department->icon == 'fas fa-hands' ? 'selected' : '' }}>Skin (Dermatology)</option>
                <option value="fas fa-tint" {{ $department->icon == 'fas fa-tint' ? 'selected' : '' }}>Tint (Urology)</option>
                        <!-- <option value="fas fa-ambulance (Emergency)">Ambulance (Emergency)</option>
                        <option value="fas fa-heartbeat (Cardiology)">Heartbeat (Cardiology/Emergency)</option>
                        <option value="fas fa-bone (Orthopaedics)">Bone (Orthopaedics)</option>
                    
                         <option value="fas fa-female (Gynaecology)">Female (Gynaecology)</option>
                    
                        <option value="fas fa-child (Pediatrics)">Child (Pediatrics)</option>
                        <option value="fa fa-smile (Pediatrics)">Smile (Pediatrics)</option>
                        <option value="fas fa-brain (Neurology)">Brain (Neurology)</option>
                        <option value="fas fa-ribbon (Oncology)">Ribbon (Oncology)</option>
                       <option value="fas fa-x-ray (Radiology)">X-Ray (Radiology)</option>
                      <option value="fas fa-flask (Pathology)">Flask (Pathology)</option>
                     <option value="fas fa-tools (Surgery)">Tools (Surgery)</option>
                    <option value="fas fa-stethoscope (Internal Medicine)">Stethoscope (Internal Medicine)</option>
                    <option value="fas fa-eye (Ophthalmology)">Eye (Ophthalmology)</option>
                    <option value="fas fa-head-side-cough (ENT)">Ear (ENT)</option>
                     <option value="fas fa-hands (Dermatology)">Skin (Dermatology)</option>
                     <option value="fas fa-tint (Urology)">Tint (Urology)</option> -->
                 </select>

              <!-- <input type="text" class="form-control" id="editDepartmentIcon{{ $department->id }}" name="icon" value="{{ $department->icon }}" required> -->
            </div>
            <div class="form-group">
              <label for="editDepartmentDescription{{ $department->id }}" class="col-form-label">Description:</label>
              <textarea class="form-control" id="editDepartmentDescription{{ $department->id }}" name="description" required>{{ $department->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>
   <!-- Delete modal -->
  <div class="modal fade" id="deleteDepartmentModal{{ $department->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteDepartmentModalLabel{{ $department->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteDepartmentModalLabel{{ $department->id }}">Delete Department</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this department?</p>
        </div>
        <div class="modal-footer">
          <form action="{{ route('admin.departments.departmentsDestroy', $department->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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
                        <h4 class="page-title">Departments</h4>
                    </div>
                    <div class="col-sm-7 col-7 text-right m-b-30">
                        <a href="#" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#addDepartmentModal" ><i class="fa fa-plus"></i> Add Department</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Department Name</th>
                                        <th>Icon</th>
                                        <th>Description</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($departments as $department)
                                @csrf
                                    <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $department->name }}</td>
                                    <td>{{ $department->icon }}</td>
                                    <td>{{ $department->description }}</td>
                    
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editDepartmentModal{{ $department->id }}" data-id="{{ $department->id }}" data-name="{{ $department->name }}" data-icon="{{ $department->icon }}" data-description="{{ $department->description }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteDepartmentModal{{ $department->id }}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    
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
		<div id="delete_department" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this Department?</h3>
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
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- departments23:21-->
</html>