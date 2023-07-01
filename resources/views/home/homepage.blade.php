<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
   @include('home.homepagecss')
</head>
<body>
<!-- header section start -->

<div class="header_section">
   @include('home.header')
    <!-- banner section start -->
   @include('home.banner')
    <!-- banner section end -->
</div>
<!-- header section end -->
<!-- services section start -->

<!-- services section end -->
@include('home.services')
<!-- about section start -->
@include('home.about')
<!-- about section end -->
<!-- blog section start -->
@include('home.blog')
<!-- blog section end -->
<!-- client section start -->
@include('home.client')
<!-- client section end -->
<!-- choose section start -->
@include('home.choose')
<!-- choose section end -->
<!-- footer section start -->
@include('home.footer')
<!-- footer section end -->
<!-- copyright section start -->
@include('home.copyright')
<!-- copyright section end -->
<!-- Javascript files-->
@include('home.javascript')
</body>
</html>
