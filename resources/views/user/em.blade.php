<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Virtual Care</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="asset/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="asset/vendor/aos/aos.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="asset/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
      .modal-content {
            border-radius: 50px; /* Rounded corners for modal */
        }
        .modal-header {
            background-color: skyblue; /* Background color for header */
            border-bottom: none;
            border-radius: 40px;
        }
        .form-control {
            border: 1px light #007bff; /* Border color for input fields */
            border-radius: 10px; /* Rounded corners for input fields */
            padding: 0.5 rem; /* Increase padding inside input fields */
        }
        .form-control:focus {
            border-color: #0056b3; /* Darker border color on focus */
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25); /* Focus shadow */
        }
        .btn-primary {
            border-radius: 30px; /* Rounded corners for buttons */
            padding: 0.75rem 1.5rem; /* Increase button padding */
        }
        .btn-danger {
            border-radius: 30px; /* Rounded corners for cancel button */
            padding: 0.75rem 1.5rem; /* Increase button padding */
        }
        .btn-group {
            display: flex; /* Align buttons in a row */
            justify-content: flex-end; /* Align buttons to the right */
            gap: 10px; /* Space between buttons */
        }
        .modal-header {
      background-color: #00aaff;
      color: white;
      border-top-left-radius: 0.3rem;
      border-top-right-radius: 0.3rem;
      align-items: center;
    }
    .modal-content {
      border-radius: 1 rem;
    }
    .modal-body {
      padding: 2rem;
    }
    .form-control {
      border-radius: 0.25rem;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .form-control:focus {
      border-color: #00aaff;
      box-shadow: 0 0 10px rgba(0, 170, 255, 0.2);
    }
    .btn-primary {
      background-color: #00aaff;
      border-color: #00aaff;
      transition: background-color 0.3s, border-color 0.3s;
    }
    .btn-primary:hover {
      background-color: #0088cc;
      border-color: #0088cc;
    }
    .modal-header .close {
      color: white;
      opacity: 1;
    }
    .modal-header .close:hover {
      color: #ffcc00;
    }
    .modal-body form .form-group {
      margin-bottom: 15px;
    }

    .modal-body form .form-group {
      margin-bottom: 15px;
    }
    .modal {
  z-index: 1050;
}
.navbar-nav {
      margin-left: auto;
    }
    .mobile-nav-toggle {
      cursor: pointer;
    }
    .navbar-mobile {
      position: fixed;
      overflow: hidden;
      top: 0;
      right: 0;
      left: 0;
      bottom: 0;
      background: rgba(60, 60, 60, 0.9);
      transition: 0.3s;
      z-index: 999;
    }
    .navbar-mobile .navbar-nav {
      flex-direction: column;
      align-items: center;
    }
    .navbar-mobile .nav-item {
      margin: 10px 0;
    }
    </style>

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +1 5589 55488 55
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="" class="logo me-auto"><img src="asset/img/logo.png" alt="" width="45" height="45" alt=""> <span style="color:skyblue;font-style: italic; 
    font-weight: bold; 
    font-size: 24px; 
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3); 
    border-bottom: 1px light skyblue; 
    padding-bottom: 4px;"><em>Virtual Care</em></span></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->
            <nav id="navbar" class="navbar order-last order-lg-0">
              <ul>
                <li><a class="nav-link scrollto " href="/">Home</a></li>
                <li><a class="nav-link scrollto" href="/">About</a></li>
                <li><a class="nav-link scrollto" href="/">Services</a></li>
                <li><a class="nav-link scrollto" href="/">Departments</a></li>
                <li><a class="nav-link scrollto" href="contact">Contact</a></li>
              </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <section id="gallery" class="gallery">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <div class="col-lg-12">
        <h2 style="margin-top:100px; color: skyblue;">Emergency Care </h2>
        <p><em><strong>Our Emergency Department offers
            immediate virtual care for critical health issues, available 24/7. Our team of
            experienced professionals is ready to handle all types of emergencies.</strong></em></p>
        </div>
      </div>
      <div class="gallery-slider swiper">
    <div class="swiper-wrapper align-items-center">
        @foreach($galleries as $gallery)
            @if($gallery->department === 'Emergency')
                <div class="swiper-slide">
                    <a class="gallery-lightbox" href="{{ asset('storage/' . $gallery->image) }}">
                        <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid" alt="{{ $gallery->department }}">
                    </a>
                </div>
            @endif
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>

      <!-- <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/eme1.jpg"><img src="assets/img/eme1.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/eme2.jpg"><img src="assets/img/eme2.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/eme3..jpg"><img src="assets/img/eme3..jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/eme4.jpg"><img src="assets/img/eme4.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/eme5.jpg"><img src="assets/img/eme5.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/eme6..jpg"><img src="assets/img/eme6..jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/eme7.jpg"><img src="assets/img/eme7.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/eme8.jpg"><img src="assets/img/eme8.jpg" class="img-fluid" alt=""></a></div> -->
        <!-- </div>
        <div class="swiper-pagination"></div>
      </div> -->
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="" style="border-color:skyblue; border-radius:10%; border-width:4px;">
            <div class="card-body text-center" style="margin-top: 15px;">
              <i class="fa fa-ambulance" style="font-size: 3rem; color:skyblue;"></i>
              <h5 class="card-title" style="color:skyblue">Trauma care</h5>
              <p class="card-text"><strong><em>Comprehensive treatment for injuries caused by accidents or physical impact.</em></strong></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="" style="border-color:skyblue; border-radius:10%; border-width:4px;">
            <div class="card-body text-center" style="margin-top: 15px;">
              <i class="fas fa-heartbeat" style="font-size: 3rem; color: skyblue;"></i>
              <h5 class="card-title" style="color: skyblue;">cardiac emergencies</h5>
              <p class="card-text"><strong><em>Immediate care for severe heart-related conditions like heart attacks.</em></strong></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="" style="border-color:skyblue; border-radius:10%; border-width:4px;">
            <div class="card-body text-center" style="margin-top: 15px;">
              <i class="fas fa-stethoscope" style="font-size: 3rem; color: skyblue;"></i>
              <h5 class="card-title" style="color: skyblue;">stroke treatment</h5>
              <p class="card-text"><strong><em>Rapid intervention for individuals experiencing a stroke to minimize brain damage.</em></strong></p>
            </div>
          </div>
        </div>
      </div>
  
      <p style="text-align: center;"><strong><em>To book an emergency virtual appointment or for immediate assistance, please call
        1234567890 or click the button below.</em></strong></p>
        <div class="container d-flex justify-content-center" style="align-items: center;">
            <a href="" class="appointment-btn scrollto" data-toggle="modal" data-target="#appointmentModal"><span class="d-none d-md-inline">Make an</span>
              Appointment</a>
              <div class="modal fade" id="appointmentModal" tabindex="-1" role="dialog" aria-labelledby="appointmentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: skyblue; text-align: center;">
                    <h5 class="modal-title" id="appointmentModalLabel">Book a Virtual Appointment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.appointments.appointmentsStore') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" id="age" name="age" placeholder="Enter your age" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        
                        <!-- <div class="form-group">
                            <label for="department">Department Selection</label>
                            <select class="form-control" id="department" name="department" required>
                                <option value="">Select Department</option>
                                <option value="emergency">Emergency</option>
                                <option value="paediatric">Paediatric</option>
                                <option value="orthopaedic">Orthopaedics</option>
                                <option value="gynaecology">Gynaecology</option>
                            </select>
                        </div> -->
                        <div class="form-group">
                              <label for="department">Department Selection</label>
                              <select class="form-control" id="department" name="department" required>
                                <option value="">Select Department</option>
                                <option value="paediatric">Paediatric</option>
                                <option value="orthopaediac">Orthopaedic</option>
                                <option value="gynaecology">Gynaecology</option>
                                <option value="emergency" selected>Emergency</option>
                              </select>
                            </div>
                            <!-- <div class="form-group">
                    <label for="doctor" class="col-form-label">Doctor:</label>
                  <select id="doctor" name="doctor_name" class="form-control" required>
                  <option value=""  selected>Select Doctor</option>
                   @foreach($doctors as $doctor)
                   <option value="{{ $doctor->name }}">{{ $doctor->name }}({{ $doctor->department }})</option>
                 @endforeach
              </select>
              </div> -->
                       
                        <div class="form-group">
                            <label for="datetime">Preferred Date and Time</label>
                            <input type="datetime-local" class="form-control" id="datetime" name="date_time" required>
                        </div>
                        <div class="form-group">
                            <label for="notes">Any Specific Concerns or Notes</label>
                            <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="Enter your concerns or notes"></textarea>
                        </div>
                       
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Book now</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
      
    </body>
    </html>
</div>
</div>

</main>
</div>


</div>
                    
</div>
             
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Virtual Care</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@virtualcare.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#department">Departments</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Telemedicine Consultations</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Home Health Monitoring</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Prescription Delivery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Specialist Referrals</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Experience top-notch healthcare from the comfort of your home with our seamless and comprehensive virtual care services.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <strong><span></span></strong>
        <a href="privacy-policy" class="text-decoration-none">Privacy Policy</a> |
        <a href="terms-of-service" class="text-decoration-none">Terms of Service</a>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="asset/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="asset/vendor/aos/aos.js"></script>
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="asset/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="asset/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="asset/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Inline JavaScript for initializing the modal -->
  <script>
    $(document).ready(function() {
      $('#appointmentModal').on('show.bs.modal', function (event) {
        var modal = $(this);
        modal.find('.modal-body #department').val('emergency'); // Set the department to Emergency
      });
    });
  </script>
</body>

</html>
   
