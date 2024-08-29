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
    <div class="main-wrapper">
    @extends('layouts.app')
    @section('content')


        
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                         <a href="{{ route('doctors') }}">
							<span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
    
							<div class="dash-widget-info text-right">
                               <h3>{{ $doctorsCount }}</h3>
                                <span class="widget-title1">Doctors <i class="fa fa-check" aria-hidden="true"></i></span>

        
							</div>
                        </a>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                        <a href="{{ route('patients') }}">
                            <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>{{ $patientsCount }}</h3>
                                <span class="widget-title2">Patients<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                      </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                        <a href="appointments">
                            <span class="dash-widget-bg4"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>{{ $appointmentsCount }}</h3>
                                <span class="widget-title4">Appointments <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                        <a href="departments"> 
                            <span class="dash-widget-bg3"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>{{ $departmentsCount }}</h3>
                                <span class="widget-title3">Department<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </a>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                         <a href="services">
							<span class="dash-widget-bg4"><i class="fa fa-cogs" aria-hidden="true"></i></span>
    
							<div class="dash-widget-info text-right">
								<h3>{{ $servicesCount }}</h3>
                                <span class="widget-title4">Services <i class="fa fa-check" aria-hidden="true"></i></span>
        
							</div>
                        </a>
                        </div>
                     </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                        <a href="testimonials">
                            <span class="dash-widget-bg3"><i class="fa fa-comments-o"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>{{ $testimonialsCount }}</h3>
                                <span class="widget-title3">Testimonials<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                      </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                        <a href="contacts">
                            <span class="dash-widget-bg2"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3> {{ $contactsCount }}</h3>
                                <span class="widget-title2">Contact<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </a>
                        </div>
                    </div>
                     <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                        <a href="gallery"> 
                            <span class="dash-widget-bg3"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>{{ $galleryCount }}</h3>
                                <span class="widget-title3">Gallery<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </a>
                        </div>
                    </div> 
                    
                </div>
				
			  <div class="row">
					<div class="col-12 col-md-15 col-lg-12 col-xl-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">Todays Appointments</h4> <a href="appointments" class="btn btn-primary float-right">View all</a>
							</div>
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table mb-0">
										<thead class="d-none">
                                        <tr>
                                <th>Patient Name</th>
                                <th>Phone</th>
                                <th>Doctor Name</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($todaysAppointments as $appointment)
                            <tr>
                                <td style="min-width: 200px;">
                                    <h5  class="time-title p-0">Name </h5>
                                <p>{{ $appointment->name }}</p>
    
                                </td>
                                <td>
                                    <h5 class="time-title p-0">Phone</h5>
                                    <p>{{ $appointment->phone }}</p>
                                </td>
                                <td>
                                    <h5 class="time-title p-0">Department</h5>
                                    <p>{{ $appointment->department }}</p>
                                </td>
                                <td>
                                    <h5 class="time-title p-0">Time</h5>
                                    <p>{{ \Carbon\Carbon::parse($appointment->date_time)->format(' h:i A') }}</p>
                                </td>
                            </tr>
                            @endforeach
                            @if($todaysAppointments->isEmpty())
                            <tr>
                                <td colspan="4" class="text-center">No appointments for today.</td>
                            </tr>
                            @endif
                            
					
										</tbody>
									</table>
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
    <!-- <script src="assets/plugins/light-gallery/js/lightgallery-all.min.js"></script> -->
    <!-- <script src="assets/js/Chart.bundle.js"></script>  -->
    <!-- <script src="assets/js/chart.js"></script> -->
    <script src="assets/js/app.js"></script> 

</body>



</html>