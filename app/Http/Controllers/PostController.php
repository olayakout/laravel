<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required'
            ]);
        // $post=new Post;
        // $post->title=request("title");
        // $post->body=request("body");
        // $post->save();

//or
        // but take care it need to save token in db so to select save items 
        // make protected $fillable=['title','body']; in model post
        Post::create(request()->all());
        return redirect('/posts');
//or
        // Post::create([
        //         'title'=>request("title"),
        //         'body'=>request("body")
        //     ]);
//or
        // Post::create(request(['title','body']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        return view('posts.edit',compact('post'));

        
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
        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required'
            ]);
        // $post=new Post;
        // $post->title=request("title");
        // $post->body=request("body");
        // $post->save();

//or
        // but take care it need to save token in db so to select save items 
        // make protected $fillable=['title','body']; in model post
        Post::find($id)->update(request()->all());
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        // redirect
        return redirect('/posts');
    }
}
