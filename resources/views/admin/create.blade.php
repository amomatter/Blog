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
    @include('admin.AddPostCss')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Dashboard</h2>
            </div>
            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                 <label for="title">Post Title:</label>
                <input name="title" type="text"/>
                </div>

                <div>

                <label for="title">description:</label>

                <textarea  name="description"  ></textarea>

                </div>

                <div>

                <label for="title">Choose image:</label>

                    <div class="form-group">
                        <input type="file" name="image" id="file" class="input-file">
                        <label for="file" class="btn btn-tertiary js-labelFile">
                            <i class="icon fa fa-check"></i>
                            <span class="js-fileName">Choose a file</span>
                        </label>
                    </div>


                </div>
                <br>

                  <input  style="text-align: center" type="submit" value="Send" />
            </form>
        </div>
        <footer class="footer">
            @include('admin.footer')
        </footer>
    </div>
</div>
<!-- JavaScript files-->
@include('admin.JsFiles')
</body>
</html>
