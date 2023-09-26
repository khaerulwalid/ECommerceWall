<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.layout.css')
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
        @include('admin.layout.sidebar')
      <!-- partial -->

          @include('admin.layout.header')
        <!-- partial -->

          @yield('content')

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.layout.script')
    <!-- End custom js for this page -->
  </body>
</html>