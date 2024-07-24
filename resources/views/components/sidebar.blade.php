<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar bg-dark text-white">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link active" href="{{ route('dashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('challenges.create') }}">
        <i class="bi bi-upload"></i>
        <span>Set Challenges</span>
      </a>
    </li><!-- End Upload Questions Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('admin.upload-questions-form') }}">
        <i class="bi bi-upload"></i>
        <span>Upload Questions and Answers</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('admin.manage-schools') }}">
        <i class="bi bi-building"></i>
        <span>Manage Schools</span>
      </a>
    </li><!-- End Manage Schools Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('challenges.index') }}">
        <i class="bi bi-eye"></i>
        <span>View Set Challenges</span>
      </a>
    </li><!-- End View Challenge Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('admin.analytics') }}">
        <i class="bi bi-bar-chart"></i>
        <span>Analytics</span>
      </a>
    </li><!-- End View Analytics Nav -->

    @if(auth()->check() && auth()->user()->role == 'representative')
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('representative.dashboard') }}">
          <i class="bi bi-person-circle"></i>
          <span>Representative Dashboard</span>
        </a>
      </li><!-- End Representative Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('representative.confirm-participants') }}">
          <i class="bi bi-check-circle"></i>
          <span>Confirm Participants</span>
        </a>
      </li><!-- End Confirm Participants Nav -->

    @elseif(auth()->check() && auth()->user()->role == 'participant')
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('participant.dashboard') }}">
          <i class="bi bi-person"></i>
          <span>Participant Dashboard</span>
        </a>
      </li><!-- End Participant Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('participant.view-challenges') }}">
          <i class="bi bi-list"></i>
          <span>View Challenges</span>
        </a>
      </li><!-- End View Challenges Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('participant.attempt-challenge') }}">
          <i class="bi bi-pencil-square"></i>
          <span>Attempt Challenge</span>
        </a>
      </li><!-- End Attempt Challenge Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('participant.view-results') }}">
          <i class="bi bi-file-earmark-text"></i>
          <span>View Results</span>
        </a>
      </li><!-- End View Results Nav -->
    @endif

  </ul>

</aside><!-- End Sidebar -->
