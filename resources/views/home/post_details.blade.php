<!DOCTYPE html>
<html lang="en">
<head>
<base href="/public">    <!-- basic -->
    @include('home.homepagecss')
</head>
<body>
<!-- header section start -->

<div class="header_section">
@include('home.header')

</div>

<div class="container table-responsive py-5">
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Posted by</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th> <img  width="100" height="100" src="/postImage/{{$post->image}}" ></th>
            <td><p style="text-align: center; font-weight: 900">{{$post->title}}</p></td>
            <td><p style="text-align: center; font-weight: 900">{{ $post->name}}</p></td>
            <td><p style="text-align: center; font-weight: 900"> {{ $post->description}}</p></td>
        </tr>

        </tbody>
    </table>
</div>




<!-- Javascript files-->
@include('home.javascript')
</body>
</html>
