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
  <!-- <link href="assets/img/logo.png" rel=""> -->
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">  -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
    border: 1px light #007bff; 
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
border: 1rem;
}
.modal-body {
padding: 2rem;
}
.form-control {
border-radius:0.25 rem;
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
    padding-bottom: 4px;" ><em>Virtual Care</em></span></a>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->
    
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul class="">
              <li><a class="nav-link scrollto " href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">About</a></li>
              <li><a class="nav-link scrollto" href="#services">Services</a></li>
              <li><a class="nav-link scrollto" href="#featured-services">Departments</a></li>
              <li><a class="nav-link scrollto" href="contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

       
      <a href="" class="appointment-btn scrollto" data-toggle="modal" data-target="#appointmentModal"><span class="d-none d-md-inline">Make an</span>
        Appointment</a>
      </header>
      <!-- The Modal -->
      
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
                            <label for="doctor_name">Doctor Name</label>
                            <input type="text" class="form-control" id="doctor_name" name="doctor_name" placeholder="Enter doctor's name" required>
                        </div> -->
                        <div class="form-group">
                        <label for="department" class="col-form-label">Department:</label>
                         <select id="department" name="department" class="form-control" required>
                         <option value="" disabled selected>Select Department</option>
                         @foreach($departments as $department) 
                           <option value="{{ $department->name }}">{{ $department->name }}</option>
                       @endforeach 
                   </select>
                    </div>
                  
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
<!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="500" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="container" >
            <h2>Welcome to <span>Virtual Care</span></h2>
            <p>At Virtual Care, we are committed
              to providing top-notch healthcare services from the comfort of your home. Our
              dedicated team of professionals ensures you receive the best care possible through
              our virtual platform.</p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>Welcome to Virtual Care</h2>
            <p>At Virtual Care, we are committed
              to providing top-notch healthcare services from the comfort of your home. Our
              dedicated team of professionals ensures you receive the best care possible through
              our virtual platform.</p>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="container">
            <h2>Welcome to Virtual Care</h2>
            <p>At Virtual Care, we are committed
              to providing top-notch healthcare services from the comfort of your home. Our
              dedicated team of professionals ensures you receive the best care possible through
              our virtual platform.</p>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">
        <div class="row">
            @foreach($departments as $department)
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="{{ $department->icon }}"></i></div>
                        <div class="content">
                            <h4 class="title">
                                <!-- Manually map departments to routes -->
                                @if($department->name == 'Emergency')
                                    <a href="{{ route('em') }}" style="color: black;">{{ $department->name }}</a>
                                @elseif($department->name == 'Paediatric')
                                    <a href="{{ route('pa') }}" style="color: black;">{{ $department->name }}</a>
                                @elseif($department->name == 'Orthopaedic')
                                    <a href="{{ route('or') }}" style="color: black;">{{ $department->name }}</a>
                                @elseif($department->name == 'Gynaecology')
                                    <a href="{{ route('gyne') }}" style="color: black;">{{ $department->name }}</a>
                                @endif
                            </h4>
                            <p class="description">{{ $department->description }}</p>
                            <!-- Similarly map the "Read More" button -->
                            @if($department->name == 'Emergency')
                                <a href="{{ route('em') }}" class="btn-get-started scrollto">Read More</a>
                            @elseif($department->name == 'Paediatric')
                                <a href="{{ route('pa') }}" class="btn-get-started scrollto">Read More</a>
                            @elseif($department->name == 'Orthopaedic')
                                <a href="{{ route('or') }}" class="btn-get-started scrollto">Read More</a>
                            @elseif($department->name == 'Gynaecology')
                                <a href="{{ route('gyne') }}" class="btn-get-started scrollto">Read More</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

    

     
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>In an emergency? Need help now?</h3>
          <p>Our team of
            experienced professionals is ready to handle all types of emergencies</p>
          
            
          
        </div>

      </div>
    </section><!-- End Cta Section -->
    <!--About Section-->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4 gx-5">

          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/vc.jpg" width="85%"  class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox pulsating-play-btn"></a>
          </div>

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h2 style="text-align: center;"><strong> About Virtual Care</strong></h2>
            <p>
              At Virtual Care, we are committed to
providing the highest quality healthcare through our innovative virtual platform. Our
team of experienced professionals ensures you receive the best care possible from
the comfort of your home.
            </p>
            <div>
              <p><strong><em>Our mission is to deliver compassionate, patient-centered care
                through innovation and excellence.</em></strong></p>
            </div>
            
          </div>
    </section>

    
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Services</h2>
          <p>At Virtual Care, we offer a wide range of
            services to meet all your healthcare needs. Explore our services to find out how we
            can help you.</p>
        </div>
       
        <div class="row">
        @foreach($services as $service)
          <div class="col-lg-6 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon">
              <!-- <i class="{{ $service->icon }}"></i> -->
              @if($service->icon)
                        <img src="{{ asset('storage/' . $service->icon) }}" class="img-fluid" alt="">
                    @else
                        <img src="default-image.png" class="img-fluid" alt="">
                    @endif
              <!-- <img src="{{ asset('images/' . $service->icon) }}"  class="img-fluid"> -->
            </div>
            <h4 class="title">{{ $service->title }}</h4>
            <p class="description">{{ $service->description }}</p>
          </div>
          @endforeach
        </div>

        <h5 style="text-align: center; color:black"><strong><em>Ready to get started? Book a consultation today!</em></strong></h5>

      </div>
    </section><!-- End Services Section -->
      
    

    
      

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>What Our Patients Say</h2>
          <p>Don’t just take our word for it. Here’s
            what our patients have to say about their experience with Virtual Care.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
          @foreach($testimonials as $testimonial) 
          
            <div class="swiper-slide">

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        {{ $testimonial->content }}
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    @if($testimonial->image)
                        <img src="{{ asset('storage/' . $testimonial->image) }}" class="testimonial-img" alt="">
                    @else
                        <img src="default-image.png" class="testimonial-img" alt="">
                    @endif
                    <h3>{{ $testimonial->author }}</h3>
                </div>
            </div>
           @endforeach 
            </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Meet Our Doctors</h2>
          <p>At Virtual Care Hospital, our expert doctors combine cutting-edge technology with compassionate care to provide you with the highest quality healthcare experience.</p>
        </div>

       
          <div class="row">
    @foreach($doctors as $doctor)
    <div class="col-lg-3 col-md-6 d-flex align-items-stretch"> 
        <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img" style="height=50px">
                @if($doctor->image)
                    <img src="{{ asset('storage/' . $doctor->image) }}" class="img-fluid" alt="" >
                @else
                    <img src="default-image.png" class="img-fluid" alt="">
                @endif
                <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="member-info">
                <h4>{{ $doctor->name }}</h4>
                <!-- <span>{{ $doctor->department }}</span> -->
            </div>
        </div>
    </div>
    @endforeach

          

        </div>

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Discover the heart of Virtual Care Hospital through our gallery, showcasing our state-of-the-art facilities and the dedicated care we provide to every patient.</p>
        </div>
        <div class="gallery-slider swiper">
    <div class="swiper-wrapper align-items-center">
        @foreach($galleries as $gallery)
            @if($gallery->department === 'Virtualcare(Home Page)')
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
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div> -->

      </div>
    </section><!-- End Gallery Section -->

     

    <!-- ======= Frequently Asked Questioins Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Find answers to common
            questions about our services and how to use our platform.</p>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">How do I book a virtual appointment?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                You can book a virtual appointment
by visiting our booking page, selecting your preferred department, and filling
out the required details.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">What do I need for a virtual consultation? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                You need a stable internet
connection, a device with a camera and microphone, and a quiet place for
your consultation.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">How do I receive my prescriptions? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                After your consultation, the doctor will
send your prescription to our partner pharmacy, and you will receive your
medications at home.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Can I get a referral to a specialist? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>Yes, our doctors can refer you to
                specialists for advanced care. We will coordinate the referral process for you.</p>
            </div>
          </li>

          
         

        </ul>

      </div>
    </section><!-- End Frequently Asked Questioins Section -->

  </main><!-- End #main -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="#featured-services">Departments</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact">Contact</a></li>

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
        modal.find('.modal-body #department').val(''); // Set the department to Emergency
      });
    });
  </script>
</body>

</html>