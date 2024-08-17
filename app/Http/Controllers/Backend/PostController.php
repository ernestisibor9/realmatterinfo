<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
     // All Post
     public function AllPost()
     {
         $posts = Post::latest()->get();
         return view('admin.backend.post.all_post', compact('posts'));
     }
     // Add Post
     public function AddPost(){
        $categories = Category::latest()->get();
        return view('admin.backend.post.add_post',compact('categories'));
       }
     // Store Post
     public function StorePost(Request $request){

            $image = $request->file('post_image');
            $filename = date('YmdHi') . $image->getClientOriginalName();
            $image->move(public_path('upload/post_images/'), $filename);
            $save_url = 'upload/post_images/' . $filename;

        Post::insert([
            'cat_id' => $request->blogcat_id,
            'post_title' => $request->post_title,
            'post_slug' =>  Str::slug($request->post_title),
            'long_descp' => $request->long_descp,
            'video_url' => $request->video_url,
            'post_image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Post Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.post')->with($notification);

       }
       // Edit Post
       public function EditPost($id){

        $categories = Category::latest()->get();
        $post = Post::find($id);
        return view('admin.backend.post.edit_post',compact('post','categories'));

       }
       // Update Post
       public function UpdatePost(Request $request){

        $post_id = $request->id;

        if ($request->file('post_image')) {

            $image = $request->file('post_image');
            $filename = date('YmdHi') . $image->getClientOriginalName();
            $image->move(public_path('upload/post_images/'), $filename);
            $save_url = 'upload/post_images/' . $filename;

            Post::find($post_id)->update([
                'cat_id' => $request->blogcat_id,
                'post_title' => $request->post_title,
                'post_slug' => Str::slug($request->post_title),
                'long_descp' => $request->long_descp,
                'video_url' => $request->video_url,
                'post_image' => $save_url,
                'created_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Post Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.post')->with($notification);

        } else {

            Post::find($post_id)->update([
                'cat_id' => $request->blogcat_id,
                'post_title' => $request->post_title,
                'post_slug' => Str::slug($request->post_title),
                'long_descp' => $request->long_descp,
                'video_url' => $request->video_url,
                'created_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Post Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.post')->with($notification);

        }

    }
    //

    public function DeletePost($id){

        $item = Post::find($id);
        $img = $item->post_image;
        unlink($img);

        Post::find($id)->delete();
            $notification = array(
                'message' => 'Post Deleted Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

    }// End Method
}
