<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        if(Auth::id()){
            $posts = Post::where('post_status','active')->get();

            $userType=Auth()->user()->userType;
            if ($userType=="admin"){

                return view('admin.admin');
            }elseif ($userType=="user"){

                return view('home.homepage',compact('posts'));
            }
            else{

                return redirect()->back()->with('Error in type');
            }
        }

    }
    public function homepage(){
        $posts = Post::where('post_status','active')->get();

        return view('home.homepage',compact('posts'));
    }

    public function post_details($id){


        $post= Post::findOrFail($id);

        return view('home.post_details',compact('post'));
    }
    public function add_post(){

        return view('home.add_post');
    }

    public function store_post(Request $request){

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
        $AddPost->post_status='pending';
        $AddPost->user_id= $user_id;
        $AddPost->name=$name;
        $AddPost->userType= $user->userType;
        $AddPost->save();
        Toastr::success('Message', 'Post added successfully');
        return redirect('/');
    }

    public function my_posts(){

        $user=Auth::user();
        $userId=$user->id;
        $posts =Post::where('user_id',$userId)->get();
        return view('home.my_posts',compact('posts'));
    }
    public function my_posts_delete($id){


        $DeletePost=Post::findOrFail($id);
        $image_path=public_path('postImage/'.$DeletePost->image);
        if (file_exists( $image_path)){

            unlink( $image_path);
        }
        $DeletePost->delete();
        Toastr::error('Message', 'Post deleted successfully');
        return redirect()->back();
    }
    public function my_posts_update(Request $request){


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
        return redirect()->back();


    }

    public function Accept_post($id){




        $UpdatePost=Post::findOrFail($id);

        $UpdatePost->post_status='active';
        $UpdatePost->save();
        Toastr::success('Message', 'Post updated successfully');
        return redirect()->back();
    }
    public function Reject_post($id)
    {

        $UpdatePost=Post::findOrFail($id);

        $UpdatePost->post_status='Rejected';
        $UpdatePost->save();
        Toastr::success('Message', 'Post updated successfully');
        return redirect()->back();



    }

}
