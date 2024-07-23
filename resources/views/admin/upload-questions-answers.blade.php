<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Questions and Answers - Mathematics Challenge</title>
  <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/vendor/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="/assets/vendor/boxicons/css/boxicons.min.css">
  <link rel="stylesheet" href="/assets/vendor/quill/quill.snow.css">
  <link rel="stylesheet" href="/assets/vendor/quill/quill.bubble.css">
  <link rel="stylesheet" href="/assets/vendor/remixicon/remixicon.css">
  <link rel="stylesheet" href="/assets/vendor/simple-datatables/style.css">
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
    <h1>Upload Questions and Answers</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Upload Questions and Answers</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="container mt-5">
      <h2 class="text-center mb-4">Upload Questions and Answers</h2>

      <div class="card">
        <div class="card-body">
          <form action="{{ route('uploadQuestions') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
              <label for="questionsFile">Upload Questions File (questions.xlsx)</label>
              <input type="file" class="form-control" id="questionsFile" name="questionsFile" accept=".xlsx" required>
            </div>

            <div class="form-group mb-3">
              <label for="answersFile">Upload Answers File (answers.xlsx)</label>
              <input type="file" class="form-control" id="answersFile" name="answersFile" accept=".xlsx" required>
            </div>

            <button type="submit" class="btn btn-primary">Upload Questions and Answers</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
