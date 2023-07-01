<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    @include('home.homepagecss')

</head>
<body style="background-color: white;">
<!-- header section start -->

<div class="header_section">
@include('home.header')
<!-- banner section start -->
@include('home.banner')
<!-- banner section end -->
</div>
@include('admin.AddPostCss')
<form style="background-color: #333" action="{{url('store_post')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">Post Title:</label>
        <input name="title" type="text" required/>
    </div>

    <div>

        <label for="title">description:</label>

        <textarea  name="description"  required ></textarea>

    </div>

    <div>

        <label for="title">Choose image:</label>

        <div class="form-group">
            <input type="file" required name="image" id="file" class="input-file">
            <label for="file" class="btn btn-tertiary js-labelFile">
                <i class="icon fa fa-check"></i>
                <span class="js-fileName">Choose a file</span>
            </label>
        </div>


    </div>
    <br>

    <input  class="btn btn-dark" style="text-align: center;margin: auto;"  type="submit" value="Send" />
</form>
<!-- footer section start -->
<!-- footer section end -->
<!-- copyright section start -->
@include('home.copyright')
<!-- copyright section end -->
<!-- Javascript files-->
@include('home.javascript')
</body>
</html>
