<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('home', compact('posts'));
    }

    public function allposts()
    {
        $posts = Post::latest()->paginate(5);
        return view('blog.allposts', compact('posts'));
    }
    /*========= Create Start=======*/
    public function create()
    {
        $categories = Category::all();

        return view('blog.create', compact('categories'));
    }

    public function store()
    {
        Post::create([
        'title'  => request('title'),
        'slug'  => str_slug(request('title')),
        'content' => request('content'),
        'category_id' => request('category_id')
      ]);

        //return view('/');
    }
    /*========= Create End=======*/


    /*========= Delete =======*/
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('blog.allposts');
    }

    /*========= Show =======*/
    public function show(Post $post)
    {
        return view('blog.singlepost', compact('post'));
    }

    /*========= Edit =======*/
    public function edit(Post $post)
    {
        //$post = Post::find($id);
        $categories = Category::all();

        return view('blog.edit', compact('post', 'categories'));
    }

    /*========= Update =======*/
    public function update(Post $post){

        $post->update([
            'title'       => request('title'),
            'category_id' => request('category_id'),
            'content'     => request('content')
        ]);

        return redirect()->route('blog.allposts');
    }

}
