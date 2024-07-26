<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center shadow-sm" style="background-color: #000000; color: #fff;">

  <div class="d-flex align-items-center justify-content-between">
    <a href="#" class="logo d-flex align-items-center text-white">
      <img src="images/a.jpg" alt="Logo" class="me-2" style="height: 100px;">
      <span></span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn text-white"></i>
  </div><!-- End Logo -->

  <h2 class="d-none d-lg-block mx-auto text-white">Mathematics is the key</h2>

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle text-white" href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->

      <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0 text-white" href="#" data-bs-toggle="dropdown">
          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle me-2" style="height: 40px;">
          <span class="d-none d-md-block dropdown-toggle ps-2">Jim Edward</span>
        </a><!-- End Profile Image Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile shadow-sm">
          <li class="dropdown-header">
            <h6>Jim Edward</h6>
            <span>Software Engineer</span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ route('login') }}">
              <i class="bi bi-box-arrow-in-right"></i>
              <span>Login</span>
            </a>
          </li><!-- End Login Page Nav -->

          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ route('home') }}">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
