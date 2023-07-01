<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function index()
    {
        return view('admin.create');
    }

    public function create()
    {


    }
public function show_page(){


    $posts = Post::all();
    return view('admin.index', compact('posts'));
}




    public function store(Request $request)
    {
       $user =Auth()->user();
        $user_id = $user->id;
        $name = $user->name;
//        $usertype = $user->userType;


       $image = $request->image;
       $imageName=time().'.'.$image->getClientOriginalExtension();
       $image->move('postImage',$imageName);


       $AddPost=new Post();
       $AddPost->title=$request->title;
       $AddPost->description=$request->description;
       $AddPost->image=$imageName;
       $AddPost->post_status='active';
       $AddPost->user_id= $user_id;
       $AddPost->name=$name;
       $AddPost->userType= $user->userType;
       $AddPost->save();
        Toastr::success('Message', 'Post added successfully');
        return redirect('show_page');
    }


    public function show(Post $post)
    {
        //
    }


    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request)
    {
        $user =Auth()->user();
        $user_id = $user->id;
        $name = $user->name;
//        $usertype = $user->userType;


        $image = $request->image;
        $imageName=time().'.'.$image->getClientOriginalExtension();
        $image->move('postImage',$imageName);


        $UpdatePost=Post::findOrFail($request->id);
        $UpdatePost->title=$request->title;
        $UpdatePost->description=$request->description;
        $UpdatePost->image=$imageName;
        $UpdatePost->post_status='active';
        $UpdatePost->user_id= $user_id;
        $UpdatePost->name=$name;
        $UpdatePost->userType= $user->userType;
        $UpdatePost->save();
        Toastr::success('Message', 'Post updated successfully');
        return redirect('show_page');
    }


    public function destroy(Request $request)
    {
        $DeletePost=Post::findOrFail($request->id);
        $image_path=public_path('postImage/'.$DeletePost->image);
        if (file_exists( $image_path)){

            unlink( $image_path);
        }
        $DeletePost->delete();
        Toastr::error('Message', 'Post deleted successfully');
        return redirect('show_page');
    }
    public function delete_all(){

        DB::table('posts')->truncate();
        Toastr::error('Message', 'All Posts deleted successfully');
        return redirect('show_page');

    }
}
