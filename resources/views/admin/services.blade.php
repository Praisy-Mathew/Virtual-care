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
<!-- Edit Modal -->
@foreach($services as $service)
<div class="modal fade" id="editModal{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('admin.services.servicesUpdate', $service->id) }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Service</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="editServiceName{{ $service->id }}">Service Name:</label>
                            <input type="text" class="form-control" id="editServiceName{{ $service->id }}" name="title" value="{{ $service->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="editServiceDescription{{ $service->id }}">Service Description:</label>
                            <textarea class="form-control" id="editServiceDescription{{ $service->id }}" name="description" required>{{ $service->description }}</textarea>
                        </div>
                       
                         <div class="form-group">
                            <label for="editServiceIcon{{ $service->id }}">Image</label>
                            <input type="file" class="form-control" id="editServiceIcon{{ $service->id }}" name="icon" value="{{ $service->icon }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Service Modal -->
    <div class="modal fade" id="deleteModal{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('admin.services.servicesDestroy', $service->id) }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Delete Service</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this service?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

 
  <!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addModalLabel">Add Service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form id="addForm" action="{{ route('admin.services.servicesStore') }}" method="POST"  enctype="multipart/form-data">
          @csrf
          <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description" required>
                        </div>
                       
                        <div class="form-group">
                            <label for="icon">Image</label>
                            <input type="file" class="form-control" id="icon" name="icon" accept="image/*" required>
                        </div> 
                        <button type="submit" class="btn btn-primary">Add Service</button>
                    </form>
</div>
      </div>
    </div>
  </div>
  
  
  
    <div class="main-wrapper">
    @extends('layouts.app')
    @section('content')
        
     <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Services</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add-doctor.html" class="btn btn-primary btn-rounded float-right"data-toggle="modal" data-target="#addModal" ><i class="fa fa-plus"></i> Add Services</a>
                    </div>
                </div>
				<div class="row doctor-grid">
                @foreach($services as $service)
                    <div class="col-lg-6">
                        <div class="profile-widget">
                            <div class="doctor-img">
                            <a class="avatar" href="#" style="background-color: skyblue;">
                                <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->author }}">
                            </a>
                                 <!-- <a class="avatar" href="" style="background-color: skyblue;">
                                 <img src="{{ asset('images/' . $service->icon) }}" class="avatar" accept="image/*" >
                                    <!-- <i class="fa {{ $service->icon }}"></i>  -->
                                <!-- </a> -->
                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editModal{{ $service->id }}">
                                   <i class="fa fa-pencil m-r-5"></i> Edit
                               </a>
                               <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteModal{{ $service->id }}">
                                   <i class="fa fa-trash-o m-r-5"></i> Delete
                               </a>
                                </div>
                              </div>
                              
                              
                            <h4 class="doctor-name text-ellipsis"><a href="">{{ $service->title}}</a></h4>
                            <div class="doc-prof"><h5><em>{{ $service->description }}</em></h5></div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
            @endsection
            <div class="sidebar-overlay" data-reff=""></div>
            <script src="assets/js/jquery-3.2.1.min.js"></script>
            <script src="assets/js/popper.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/jquery.slimscroll.js"></script>
            <script src="assets/js/Chart.bundle.js"></script>
            <script src="assets/js/chart.js"></script>
            <script src="assets/js/app.js"></script>
            <script>
                document.querySelectorAll('.edit-btn').forEach(button => {
                  button.addEventListener('click', function(event) {
                    // Button that triggered the modal
                    const button = event.currentTarget;
                    // Extract info from data-* attributes
                    const serviceId = button.getAttribute('data-id');
                    const serviceName = button.getAttribute('data-name');
                    const serviceDescription = button.getAttribute('data-description');
              
                    // Update the modal's content
                    const editModal = document.getElementById('editModal');
                    const modalTitle = editModal.querySelector('.modal-title');
                    const serviceNameInput = editModal.querySelector('#serviceName');
                    const serviceDescriptionInput = editModal.querySelector('#serviceDescription');
                    const serviceIdInput = editModal.querySelector('#serviceId');
              
                    modalTitle.textContent = `Edit Service: ${serviceName}`;
                    serviceNameInput.value = serviceName;
                    serviceDescriptionInput.value = serviceDescription;
                    serviceIdInput.value = serviceId;
                  });
                });
              </script>
              
        
        </body>
        
        
        
        </html>        
                    
            