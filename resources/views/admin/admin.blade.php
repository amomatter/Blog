<!DOCTYPE html>
<html>
<head>
   @include('admin.css')
</head>
<body>
<header class="header">
  @include('admin.header')
</header>
<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
   @include('admin.Navigation')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Dashboard</h2>
            </div>
        </div>
        @include('admin.section')
        <footer class="footer">
              @include('admin.footer')
        </footer>
    </div>
</div>
<!-- JavaScript files-->
@include('admin.JsFiles')
</body>
</html>
