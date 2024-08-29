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
    <!-- @foreach ($contacts as $contact)
    <div class="modal fade" id="deleteModal{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $contact->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteLabel{{ $contact->id }}">Delete Message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this message?</p>
                        <input type="hidden" id="deleteId" name="deleteDepartmentId" value="{{ $contact->id }}">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
      -->
<!-- Delete Service Modal -->
 @foreach($contacts as $contact)
<div class="modal fade" id="deleteModal{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModal">Delete Message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this message?</p>
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




    <div class="main-wrapper">
    @extends('layouts.app')
    @section('content')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Contact Messages</h4>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
                                        <th>#</th>
										<th>Name</th>
										<th>Email</th>
										<th>Mobile</th>
										<th>Messages</th>
                                        <th>Connect</th>
                                        <th>Action</th>
									</tr>
								</thead>
								<tbody>
                                  @foreach ($contacts as $contact)
									<tr>
                                        <th scope="row">{{$loop->iteration}}</th>
										<td>{{ $contact->name }}</td>
										 <td>{{ $contact->email }}</td> 
										<td>{{ $contact->Mobile}}</td>
										<td>{{ $contact->message }}</td>
                                        <td class="text-left">
                                            <a href="tel:{{$contact->mobile}}">
                                                <i class="fa fa-phone" style="color:green"></i>
                                            </a>   
                                            <a href="mailto:{{$contact->email}}">
                                                <i class="fa fa-envelope"></i>
                                            </a>   
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteModal{{ $contact->id }}">
                                                     <i class="fa fa-trash-o m-r-5"></i> Delete
                                                </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
            </tbody>
        </table>

									
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

</html>