<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;

class PostController extends Controller
{

public function PostDetails($slug){
    // $pSlug = Post::findOrFail($slug);
    $postDetails = Post::where('post_slug',$slug)->first();
    $bcategory = Category::latest()->get();
    $post = Post::latest()->limit(4)->get();
    $videoOne = Video::latest()->limit(1)->get();
    // Increment views count
    $postDetails->increment('view');
    // $post = Post::latest()->limit(3)->get();
    return view('frontend.post.post_details',compact('bcategory', 'postDetails', 'post', 'videoOne'));
}
//
public function PostCatList($id){
    $postCat = Post::where('cat_id', $id)->get();
    // $breadcat = BlogCategory::where('id',$id)->first();
    // $bcategory = BlogCategory::latest()->get();
    $post = Post::latest()->limit(3)->get();
    return view('frontend.post.post_cat_list',compact('postCat','post'));
}
//
public function PostList(){
    $posts = Post::latest()->paginate(3);
    $bcategory = Category::latest()->get();
    $post = Post::latest()->limit(3)->get();
    $videoOne = Video::latest()->limit(1)->get();
    // $comment = Comment::latest()->get();
    return view('frontend.post.post_list',compact('posts','bcategory','post', 'videoOne'));
}
//
// Search Course
public function SearchPost(Request $request){
    $search = $request->search;
    $postSearch = Post::where('post_title', 'LIKE', '%'.$search.'%')->paginate(6);
    $bcategory = Category::latest()->get();
    $post = Post::latest()->limit(4)->get();
    $videoOne = Video::latest()->limit(1)->get();
    return view('frontend.post.search_post', compact('postSearch','post', 'bcategory', 'videoOne'));
}
}
