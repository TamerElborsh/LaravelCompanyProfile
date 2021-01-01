<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $posts = Post::orderBy('created_at','desc')->paginate(8);
        return view('dashboard.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|max:50',
            'code'=>'required|unique:posts|integer',
            'body' => 'required',
            'category_id' => 'required|integer',
            'author_email' => 'required|email',
            'post_image' => 'required|mimes:jpeg,png,bmp,jpg'
        ];

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->code = $request->code;
        $post->category_id = $request->category_id;
        $post->author_email = $request->author_email;

        $postImage = $request->file('post_image');
        $fileName = time().'.'.$postImage->extension();
        $postImage->move('post_images',$fileName);


        $post->feature_image = $fileName;
        $post->large_image = $fileName;
        $post->save();
        return redirect('/dashboard/posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
