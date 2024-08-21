<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Video;
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
    public function AddPost()
    {
        $categories = Category::latest()->get();
        return view('admin.backend.post.add_post', compact('categories'));
    }
    // Store Post
    public function StorePost(Request $request)
    {

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
    public function EditPost($id)
    {

        $categories = Category::latest()->get();
        $post = Post::find($id);
        return view('admin.backend.post.edit_post', compact('post', 'categories'));
    }
    // Update Post
    public function UpdatePost(Request $request)
    {

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

    public function DeletePost($id)
    {

        $item = Post::find($id);
        $img = $item->post_image;
        unlink($img);

        Post::find($id)->delete();
        $notification = array(
            'message' => 'Post Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // End Method





    //////  VIDEOS  //////
    // All Videos
    public function AllVideo()
    {
        $videos = Video::latest()->get();
        return view('admin.backend.video.all_video', compact('videos'));
    }
    // Add Video
    public function AddVideo()
    {
        $categories = Category::latest()->get();
        return view('admin.backend.video.add_video', compact('categories'));
    }
    // Store Video
    public function StoreVideo(Request $request)
    {

        $image = $request->file('post_image');
        $filename = date('YmdHi') . $image->getClientOriginalName();
        $image->move(public_path('upload/post_images/'), $filename);
        $save_url = 'upload/post_images/' . $filename;

        Video::insert([
            'cat_id' => $request->blogcat_id,
            'post_title' => $request->post_title,
            'post_slug' =>  Str::slug($request->post_title),
            'long_descp' => $request->long_descp,
            'video_url' => $request->video_url,
            'post_image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Video Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.video')->with($notification);
    }
    // Edit Post
    public function EditVideo($id)
    {
        $categories = Category::latest()->get();
        $video = Video::find($id);
        return view('admin.backend.video.edit_video', compact('video', 'categories'));
    }

    // Update Video
    public function UpdateVideo(Request $request)
    {

        $post_id = $request->id;

        if ($request->file('post_image')) {

            $image = $request->file('post_image');
            $filename = date('YmdHi') . $image->getClientOriginalName();
            $image->move(public_path('upload/post_images/'), $filename);
            $save_url = 'upload/post_images/' . $filename;

            Video::find($post_id)->update([
                'cat_id' => $request->blogcat_id,
                'post_title' => $request->post_title,
                'post_slug' => Str::slug($request->post_title),
                'long_descp' => $request->long_descp,
                'video_url' => $request->video_url,
                'post_image' => $save_url,
                'created_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Video Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.video')->with($notification);
        } else {

            Video::find($post_id)->update([
                'cat_id' => $request->blogcat_id,
                'post_title' => $request->post_title,
                'post_slug' => Str::slug($request->post_title),
                'long_descp' => $request->long_descp,
                'video_url' => $request->video_url,
                'created_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Video Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.video')->with($notification);
        }
    }
    // Delete video
    public function DeleteVideo($id)
    {

        $item = Post::find($id);
        $img = $item->post_image;
        unlink($img);

        Video::find($id)->delete();
        $notification = array(
            'message' => 'Video Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // End Method
    public function AdminBlogComment()
    {
        $comment = Comment::where('parent_id', null)->latest()->get();
        return view('admin.backend.comment.comment_all', compact('comment'));
    } // End Method
    //
    public function AdminCommentReply($id)
    {
        $comment = Comment::where('id', $id)->first();
        return view('admin.backend.comment.reply_comment', compact('comment'));
    } // End Method
    //

    public function ReplyMessage(Request $request)
    {

        $id = $request->id;
        // $user_id = $request->user_id;
        $post_id = $request->post_id;

        Comment::insert([
            'name' => $request->name,
            'email' => $request->email,
            'post_id' => $post_id,
            'parent_id' => $id,
            'message' => $request->message,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Reply Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Method
     // Change Status
     public function ChangeStatus($id){
        $statusId = Comment::findOrFail($id);

        if($statusId->status === 'pending'){
            $statusId->status = 'active';
        }
        else{
            $statusId->status = 'pending';
        }
        $statusId->save();

        $notification = array(
            'message'=> 'Status Changed to ' .  ucfirst($statusId->status),
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
}
