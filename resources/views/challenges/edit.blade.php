<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Set Challenges - Mathematics Challenge</title>

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/quill/quill.snow.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/quill/quill.bubble.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/remixicon.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/simple-datatables/style.css') }}">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

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
      <h1>Edit Challenge</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Edit Challenge</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="container mt-5">
        <h2 class="text-center mb-4">Edit Challenge</h2>
        <div class="card">
          <div class="card-body">
            <form action="{{ route('challenges.update', $challenge->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="form-group mb-3">
                <label for="challengeName">Challenge Name</label>
                <input type="text" class="form-control" id="challengeName" name="challengeName" value="{{ $challenge->name }}" required>
              </div>

              <div class="form-group mb-3">
                <label for="startDate">Start Date</label>
                <input type="date" class="form-control" id="startDate" name="startDate" value="{{ $challenge->start_date }}" required>
              </div>

              <div class="form-group mb-3">
                <label for="endDate">End Date</label>
                <input type="date" class="form-control" id="endDate" name="endDate" value="{{ $challenge->end_date }}" required>
              </div>

              <div class="form-group mb-3">
                <label for="duration">Duration (in minutes)</label>
                <input type="number" class="form-control" id="duration" name="duration" value="{{ $challenge->duration }}" required>
              </div>

              <div class="form-group mb-3">
                <label for="numQuestions">Number of Questions</label>
                <input type="number" class="form-control" id="numQuestions" name="numQuestions" value="{{ $challenge->number_of_questions }}" required>
              </div>

              <button type="submit" class="btn btn-primary">Update Challenge</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
