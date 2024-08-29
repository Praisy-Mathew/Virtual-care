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
    <!-- Add Testimonial Modal -->
<div class="modal fade" id="addTestimonialModal" tabindex="-1" role="dialog" aria-labelledby="addTestimonialModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addTestimonialModalLabel">Add Testimonial</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <form id="addTestimonialForm" action="{{ route('admin.testimonials.testimonialsStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="author" class="col-form-label">Author:</label>
                        <input type="text" class="form-control" id="author" name="author" required>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-form-label">Content:</label>
                        <textarea class="form-control" id="content" name="content" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-form-label">Image:</label>
                        <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-form-label">Status:</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="1">Display</option>
                            <option value="0" >Hide</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Testimonial</button>
                </form>
            </div>
        </div>
    </div>
</div>
  <!-- Edit Testimonial Modal -->
  @foreach($testimonials as $testimonial)
  <div class="modal fade" id="editTestimonialModal{{ $testimonial->id }}" tabindex="-1" role="dialog" aria-labelledby="editTestimonialModalLabel{{ $testimonial->id }}" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editTestimonialModalLabel{{ $testimonial->id }}">Edit Testimonial</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('admin.testimonials.testimonialsUpdate', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
             @method('PUT')
                            <div class="form-group">
                                <label for="editTestimonialAuthor{{ $testimonial->id }}" class="col-form-label">Author:</label>
                                <input type="text" class="form-control" id="editTestimonialAuthor{{ $testimonial->id }}" name="author" value="{{ $testimonial->author }}" required>
                            </div>
                            <div class="form-group">
                                <label for="editTestimonialContent{{ $testimonial->id }}" class="col-form-label">Content:</label>
                                <textarea class="form-control" id="editTestimonialContent{{ $testimonial->id }}" name="content" required>{{ $testimonial->content }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="editTestimonialImage{{ $testimonial->id }}" class="col-form-label">Image (optional):</label>
                                <input type="file" class="form-control" id="editTestimonialImage{{ $testimonial->id }}" name="image">
                            </div>
                           
        
            <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  
  <!-- Delete Testimonial Modal -->
  <div class="modal fade" id="deleteTestimonialModal{{ $testimonial->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteTestimonialModalLabel{{ $testimonial->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteTestimonialModalLabel{{ $testimonial->id }}">Delete Testimonial</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this testimonial?</p>
        </div>
        <div class="modal-footer">
          <form action="{{ route('admin.testimonials.testimonialsDestroy', $testimonial->id) }}" method="POST">
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
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Testimonials</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="#" class="btn btn-primary btn-rounded float-right" data-toggle="modal" data-target="#addTestimonialModal">
                    <i class="fa fa-plus"></i> Add Testimonial
                </a>
            </div>
        </div>
        <div class="row">
            @foreach($testimonials as $testimonial)
                <div class="col-lg-6">
                    <div class="profile-widget">
                        <div class="doctor-img">
                            <a class="avatar" href="#" style="background-color: skyblue;">
                                <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->author }}">
                            </a>
                        </div>
                        <div class="dropdown profile-action">
                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                               <!-- Toggle Status Button -->
                            <form action="{{ route('testimonials.toggleStatus', $testimonial->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="fa fa-eye{{ $testimonial->status ? '' : '-slash' }} m-r-5"></i> {{ $testimonial->status ? 'Hide' : 'Display' }}
                                </button>
                            </form> 
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editTestimonialModal{{ $testimonial->id }}">
                                    <i class="fa fa-pencil m-r-5"></i> Edit
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteTestimonialModal{{ $testimonial->id }}">
                                    <i class="fa fa-trash-o m-r-5"></i> Delete
                                </a>
                            </div>
                        </div>
                        <div>
                            <h4 class="doctor-name text-ellipsis">{{ $testimonial->author }}</h4>
                            <div class="doc-prof">
                                <h5><em>{{ $testimonial->content }}</em></h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
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