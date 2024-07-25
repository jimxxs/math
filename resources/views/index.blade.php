<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Mathematics Challenge</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    .card-icon, .activity-icon, .notification-icon, .setting-icon {
      font-size: 2rem; /* Adjust the size as needed */
      width: 40px; /* Adjust the size as needed */
      height: 40px; /* Adjust the size as needed */
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 10px;
    }
    .d-flex.align-items-center {
      display: flex;
      align-items: center;
    }

    /* Dark mode styles */
    body.dark-mode {
      background-color: #121212;
      color: #ffffff;
    }

    .dark-mode .card {
      background-color: #1e1e1e;
      color: #ffffff;
    }

    .dark-mode .breadcrumb {
      background-color: #1e1e1e;
      color: #ffffff;
    }

    .dark-mode .navbar, .dark-mode .sidebar {
      background-color: #1e1e1e;
    }

    .dark-mode .navbar a, .dark-mode .sidebar a {
      color: #ffffff;
    }

    /* Video container */
    .video-container {
      position: relative;
      width: 100%;
      height: 0;
      padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
      overflow: hidden;
    }

    .video-container iframe, .video-container video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
  </style>

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  @include('components.navbar')

  @include('components.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- Video Section -->
        <div class="col-12">
          <div class="video-container">
            <video autoplay loop muted>
              <source src="assets/videos/mtc.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>
        </div><!-- End Video Section -->
      </div>
    </section>

  </main><!-- End #main -->

  <!-- Dark mode toggle -->
  <div class="dark-mode-toggle">
    <button id="darkModeToggle" class="btn btn-secondary">Toggle Dark Mode</button>
  </div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    document.getElementById('darkModeToggle').addEventListener('click', function() {
      document.body.classList.toggle('dark-mode');
    });
  </script>

</body>

</html>
