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
<!-- Meta and other head elements -->
</head>
<body>
  @include('components.navbar')
  @include('components.sidebar')

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Challenges</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Challenges</li>
        </ol>
      </nav>
    </div>

    <section class="section challenges">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered" id="datatable">
                  <thead>
                    <tr>
              
                      <th>Challenge Name</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Number of Questions</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($challenges as $challenge)
                    <tr>
          
                      <td>{{ $challenge->challenge_name }}</td>
                      <td>{{ $challenge->start_date }}</td>
                      <td>{{ $challenge->end_date }}</td>
                      <td>{{ $challenge->number_of_questions }}</td>
                      <td>{{ $challenge->status }}</td>
                      <td>
                        <a href="{{ route('challenges.edit', $challenge->id) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route('challenges.destroy', $challenge->id) }}" method="POST" style="display:inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
