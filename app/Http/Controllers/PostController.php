<?php

namespace App\Http\Controllers;
use App\BlogSpot;
use Illuminate\Http\Request;
Use App\Http\Requests\StorePost;

class PostController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // di echo 
        // dd(BlogSpot::all());
        return view('posts.index',['posts'=>BlogSpot::all()]);
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        
  
        return view('posts.show', ['post' => Blogspot::findorFail($id)]);

    }
    
    public function create(){
    
        return view('posts.create');
    }

    public function store(StorePost $request){
        

        $validateData = $request->validated();
        $blogpost = BlogSpot::create($validateData);
        $request ->session ()->flash('status', 'Blog post Was Created!');

        return redirect()->route('posts.show',['post'=> $blogpost->id]);
    }
     public function edit($id){

        $post = Blogspot::findorFail($id);
         return view('posts.edit', ['post' => $post]);
     }

     public function update(StorePost $request, $id){

        $post = Blogspot::findorFail($id);
        $validateData = $request->validated();

        $post->fill($validateData);
        $request ->session ()->flash('status', 'Blog post Was updated!');
        return redirect()->route('posts.show', ['post' => $post->id]);
    }
}
