<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit School</title>

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/vendor/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="/assets/vendor/boxicons/css/boxicons.min.css">
  <link rel="stylesheet" href="/assets/vendor/quill/quill.snow.css">
  <link rel="stylesheet" href="/assets/vendor/quill/quill.bubble.css">
  <link rel="stylesheet" href="/assets/vendor/remixicon/remixicon.css">
  <link rel="stylesheet" href="/assets/vendor/simple-datatables/style.css">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="/assets/css/style.css">

  <style>
    .form-group label {
      font-weight: bold;
    }
    .btn-primary {
      background-color: #0061f2;
      border-color: #0061f2;
    }
    .btn-primary:hover {
      background-color: #004bbd;
      border-color: #004bbd;
    }
  </style>
</head>

<body>

  @include('components.navbar')

  @include('components.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit School</h1>
      <nav>
        <ol class="breadcrumb">
          <li><a href="{{ route('dashboard') }}">Home / </a></li>
          <li class="breadcrumb-item active">Edit School</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="container mt-5">
        <h2 class="text-center mb-4">Edit School</h2>

        <div class="card">
          <div class="card-body">
            @if ($message = Session::get('success'))
              <div class="alert alert-success">
                {{ $message }}
              </div>
            @endif

            <form action="{{ route('schools.update', $school->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="schoolName">School Name</label>
                <input type="text" class="form-control" id="schoolName" name="name" value="{{ $school->name }}" required>
              </div>

              <div class="form-group">
                <label for="district">District</label>
                <input type="text" class="form-control" id="district" name="district" value="{{ $school->district }}" required>
              </div>

              <div class="form-group">
                <label for="schoolRegNumber">School Registration Number</label>
                <input type="text" class="form-control" id="schoolRegNumber" name="regNo" value="{{ $school->regNo }}" required>
              </div>

              <div class="form-group">
                <label for="repName">Representative Name</label>
                <input type="text" class="form-control" id="repName" name="representative_name" value="{{ $school->representative_name }}" required>
              </div>

              <div class="form-group">
                <label for="repEmail">Representative Email</label>
                <input type="email" class="form-control" id="repEmail" name="email" value="{{ $school->email }}" required>
              </div>

              <button type="submit" class="btn btn-primary">Update School</button>
            </form>

          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/quill/quill.min.js"></script>
  <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>
