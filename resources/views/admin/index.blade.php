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
                <h2 class="h5 no-margin-bottom">Show Posts</h2>
            </div>
        </div>
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>show <b>posts</b></h2>
                        </div>
                        <div class="col-sm-6" >
                            <a href="{{url('delete_all')}}" class="text-red-600"><i class="material-icons">&#xE15C;</i> <span>Delete ALL Posts</span></a> <span></span>
                            <a    class="text-white" href="{{route('post.index')}}"><i class="material-icons">&#xE147;</i>Add new post</a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>
            <span class="custom-checkbox">

							</span>
                            <?php $i=1?>
                        </th>
                        <th>#</th>
                        <th>title</th>
                        <th>description</th>
                        <th>image</th>
                        <th>status</th>
                        <th>name</th>
                        <th>userType</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $item)

                        <tr>
                            <td>

                            <td>{{$i++}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->description}}</td>
{{--                            <td>{{$item->image}}</td>--}}
                        <td>    <img  width="50" height="50" src="{{ asset('postImage') . '/' . $item->image }}" class="image"></td>
                            <td>{{$item->post_status}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->userType}}</td>

                            <td>
                                <a data-toggle="modal" data-target="#exampleModal{{$item->id}}"   class="edit"> <button type="button" class="btn btn-info">Edit</button></a>
                                <a  data-toggle="modal" data-target="#delete{{$item->id}}" title="delete"><button type="button" class="btn btn-danger">x</button></a>

                                <a href="{{url('Accept_post',$item->id)}}"  title='Accept'  class="edit"> <button type="button" class="btn btn-info">Accept</button></a>
                                <a  href="{{url('Reject_post',$item->id)}}" title="Reject"><button type="button" class="btn btn-danger">Reject</button></a>

                            </td>


                    </tr>
                        @include('admin.edit')
                        @include('admin.delete')
                    @endforeach


                    </tbody>
                </table>

            </div>
        </div>
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
