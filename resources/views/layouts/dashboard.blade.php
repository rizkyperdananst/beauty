<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{ url('assets/css/styles.min.css') }}" />

  {{-- DataTables --}}
  <link href="{{ url('assets/DataTables/datatables.min.css') }}" rel="stylesheet"/>

  @stack('styles')
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          {{-- <a href="#" class="text-nowrap logo-img">
            <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a> --}}
          <h2 class="text-center">Beauty</h2>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        @include('spliters.sidebar')
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('spliters.header')
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        @include('spliters.main')

        @include('spliters.footer')
      </div>
    </div>
  </div>
  <script src="{{ url('assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ url('assets/js/app.min.js') }}"></script>
  <script src="{{ url('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ url('assets/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ url('assets/js/dashboard.js') }}"></script>

  {{-- fontawesome --}}
  <script src="https://kit.fontawesome.com/e7f5845a19.js" crossorigin="anonymous"></script>

  {{-- DataTables --}}
  <script src="{{ url('assets/DataTables/datatables.min.js') }}"></script>
  <script>
      $(document).ready(function () {
          $('#dataTable').DataTable();
      });
  </script>

  @stack('scripts')
  
</body>

</html>