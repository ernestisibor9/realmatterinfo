<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
        // Store Comment
        public function StoreComment(Request $request){

            $pid = $request->post_id;

            Comment::insert([
                'name' => $request->name,
                'email' => $request->email,
                'post_id' => $pid,
                'parent_id' => null,
                'message' => $request->message,
                'created_at' => Carbon::now(),
            ]);

              $notification = array(
                'message' => 'Comment recieved! Your comment will be approve by the Admin',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        }// End Metho
}
