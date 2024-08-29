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
    <style>
        .img-thumbnail {
          max-width: 100%;
          height: auto;
        }
        @media (max-width:1000px) {
          .m-b-20 {
            margin-bottom: 10px;
          }
        }
      </style>  
</head>

<body>
    <!-- Add Gallery Item Modal -->
    <div class="modal fade" id="addGalleryModal" tabindex="-1" role="dialog" aria-labelledby="addGalleryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addGalleryModalLabel">Add Gallery Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.gallery.galleryStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="galleryImage" class="col-form-label">Image:</label>
                        <input type="file" class="form-control" id="galleryImage" name="image" accept="image/*" required>
                    </div>
                    <div class="form-group">
                        <label for="galleryDepartment" class="col-form-label">Department:</label>
                        <select class="form-control" id="galleryDepartment" name="department" required>
                            <option value="Virtualcare(Home Page)">Virtualcare(Home Page)</option>
                            <option value="Emergency">Emergency</option>
                            <option value="Paediatric">Paediatric</option>
                            <option value="Orthopaedic">Orthopaedic</option>
                            <option value="Gynaecology">Gynaecology</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Gallery Item</button>
                </form>
            </div>
        </div>
    </div>
</div>
@foreach($galleries as $gallery)
<div class="modal fade" id="deleteGalleryModal{{ $gallery->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteGalleryModalLabel{{ $gallery->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteTestimonialModalLabel{{ $gallery->id }}">Delete Image</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this image?</p>
        </div>
        <div class="modal-footer">
          <form action="{{ route('admin.gallery.gallerysDestroy', $gallery->id) }}" method="POST">
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
                        <h4 class="page-title">Gallery</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="" class="btn btn-primary btn-rounded float-right"data-toggle="modal" data-target="#addGalleryModal" ><i class="fa fa-plus"></i> Add </a>
                    </div>
                </div>
            
                <div id="lightgallery" class="row">
        @foreach($galleries as $gallery)
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
            <!-- Image Container -->
            <a href="{{ asset('storage/' . $gallery->image) }}" data-toggle="lightbox" data-gallery="gallery">
                <img class="img-thumbnail" src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->department }}">
            </a>
            <!-- Department Name -->
            <div class="text-center mt-2">
                <strong>{{ $gallery->department }}</strong>
            </div>
            <!-- Delete Button -->
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteGalleryModal{{ $gallery->id }}">
            <i class="fa fa-trash-o m-r-5"></i> Delete
             </a>
             
        </div> 
    @endforeach
@endsection
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	  <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/plugins/light-gallery/js/lightgallery-all.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- gallery24:04-->
</html>