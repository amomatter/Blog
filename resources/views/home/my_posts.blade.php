<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">    <!-- basic -->
    @include('home.homepagecss')
</head>
<body style="background-color: white;">
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
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <th> <img  width="100" height="100" src="/postImage/{{$post->image}}" ></th>
            <td><p style="text-align: center; font-weight: 900">{{$post->title}}</p></td>
            <td><p style="text-align: center; font-weight: 900">{{ $post->name}}</p></td>
            <td><p style="text-align: center; font-weight: 900"> {{ $post->description}}</p></td>
            <td>
                <!-- Button trigger modal -->
                <button style="background-color:#0d95e8" type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">
                        Edit
                </button>
                <a href="{{url('my_posts_delete',$post->id)}}" style="background-color:#d13c4f" title="delete" type="button" class="btn btn-danger">X</a>


            </td>
        </tr>
        @endforeach
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #333" >
                        <h2 class="modal-title" id="exampleModalLongTitle" >Edit post</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="background-color: #333">

                        @include('admin.AddPostCss')

                        <form  action="{{url('my_posts_update',$post->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <input type="hidden" name="id" value="{{$post->id}}">
                                <label for="title">Post Title:</label>
                                <input name="title" type="text" value="{{$post->title}}" required/>
                            </div>

                            <div>

                                <label for="title">description:</label>

                                <textarea  name="description"   required >{{$post->description}}</textarea>

                            </div>

                            <div class="form-group">
                                <label for="file">Selected image :</label>
                                <img  width="100" height="100" src="{{ asset('postImage') . '/' . $post->image }}" class="image">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="file" name="image" id="file" >
                            </div>
                            <br>

                            <div class="modal-footer" style="background-color: #333">
                                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        </tbody>
    </table>
</div>




<!-- Javascript files-->
@include('home.javascript')
</body>
</html>
