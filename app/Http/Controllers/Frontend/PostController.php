<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

public function PostDetails($slug){
    // $pSlug = Post::findOrFail($slug);
    $postDetails = Post::where('post_slug',$slug)->first();
    $bcategory = Category::latest()->get();
    // Increment views count
    $postDetails->increment('view');
    // $post = Post::latest()->limit(3)->get();
    return view('frontend.post.post_details',compact('bcategory', 'postDetails'));

}
}
