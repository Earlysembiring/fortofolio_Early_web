<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Profile - Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('admin') }}/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{ asset('admin') }}/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admin') }}/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('admin') }}/images/favicon.png" />
  <style>
    .profile-header {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      padding: 40px 0;
      color: white;
      margin-bottom: 30px;
    }
    .profile-avatar {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      border: 5px solid white;
      object-fit: cover;
    }
    .profile-info {
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .info-item {
      display: flex;
      padding: 15px 0;
      border-bottom: 1px solid #f0f0f0;
    }
    .info-item:last-child {
      border-bottom: none;
    }
    .info-label {
      font-weight: 600;
      color: #667eea;
      width: 150px;
    }
    .info-value {
      color: #333;
      flex: 1;
    }
  </style>
</head>
<body>
  @php($currentUser = Auth::user())
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="{{ url('dashboard') }}"><img src="{{ asset('admin') }}/images/logo.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="{{ url('dashboard') }}"><img src="{{ asset('admin') }}/images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="{{ $currentUser && $currentUser->avatar ? asset('admin/images/faces/' . $currentUser->avatar) : 'https://ui-avatars.com/api/?name=Guest&background=E9ECEF&color=495057' }}" alt="profile"/>
              <span class="nav-profile-name">{{ $currentUser->name ?? 'Guest' }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="{{ url('dashboard') }}">
                <i class="mdi mdi-home text-primary"></i>
                Dashboard
              </a>
              @if($currentUser)
                <a class="dropdown-item" href="{{ url('auth/logout') }}">
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </a>
              @else
                <a class="dropdown-item" href="{{ url('auth') }}">
                  <i class="mdi mdi-login text-primary"></i>
                  Login
                </a>
              @endif
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('dashboard') }}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('dashboard/profile') }}">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Profile</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- Profile Header -->
          <div class="profile-header">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-12 text-center">
                  @if($currentUser && $currentUser->avatar)
                    <img src="{{ asset('admin') }}/images/faces/{{ $currentUser->avatar }}" alt="profile" class="profile-avatar mb-3">
                  @else
                    <div class="profile-avatar mb-3 d-inline-flex align-items-center justify-content-center" style="background: rgba(255,255,255,0.2);">
                      <i class="mdi mdi-account" style="font-size: 60px;"></i>
                    </div>
                  @endif
                  <h2>{{ $currentUser->name ?? 'Guest' }}</h2>
                  <p class="mb-0">{{ $currentUser ? 'Google Account' : 'Public Visitor' }}</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Profile Information -->
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="profile-info">
                <h4 class="card-title mb-4">Informasi Profil Google</h4>
                
                <div class="info-item">
                  <div class="info-label">
                    <i class="mdi mdi-account"></i> Nama Lengkap
                  </div>
                  <div class="info-value">{{ $currentUser->name ?? '-' }}</div>
                </div>

                <div class="info-item">
                  <div class="info-label">
                    <i class="mdi mdi-email"></i> Email
                  </div>
                  <div class="info-value">{{ $currentUser->email ?? '-' }}</div>
                </div>

                <div class="info-item">
                  <div class="info-label">
                    <i class="mdi mdi-google"></i> Google ID
                  </div>
                  <div class="info-value">{{ $currentUser->google_id ?? 'N/A' }}</div>
                </div>

                <div class="info-item">
                  <div class="info-label">
                    <i class="mdi mdi-calendar"></i> Terdaftar Sejak
                  </div>
                  <div class="info-value">{{ $currentUser && $currentUser->created_at ? $currentUser->created_at->format('d M Y H:i') : '-' }}</div>
                </div>

                <div class="info-item">
                  <div class="info-label">
                    <i class="mdi mdi-update"></i> Terakhir Update
                  </div>
                  <div class="info-value">{{ $currentUser && $currentUser->updated_at ? $currentUser->updated_at->format('d M Y H:i') : '-' }}</div>
                </div>
              </div>

              <!-- Action Buttons -->
              <div class="mt-4 text-center">
                <a href="{{ url('dashboard') }}" class="btn btn-primary me-2">
                  <i class="mdi mdi-arrow-left"></i> Kembali ke Dashboard
                </a>
                @if($currentUser)
                  <a href="{{ url('auth/logout') }}" class="btn btn-danger">
                    <i class="mdi mdi-logout"></i> Logout
                  </a>
                @endif
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2025 Portfolio</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('admin') }}/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset('admin') }}/js/off-canvas.js"></script>
  <script src="{{ asset('admin') }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('admin') }}/js/template.js"></script>
  <script src="{{ asset('admin') }}/js/settings.js"></script>
  <script src="{{ asset('admin') }}/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
