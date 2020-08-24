<?php

namespace App\Http\Controllers;
use App\BlogSpot;
use Illuminate\Http\Request;

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
    public function show(Request $request,$id){
        // dd(BlogSpot::find($id));
        $request->session()->reflash();
        return view('posts.show', ['post' => Blogspot::findorFail($id)]);

    }
    
    public function create(){
    
        return view('posts.create');
    }

    public function store(Request $request){
        
        $blogpost = new BlogSpot();
        $blogpost->title =$request->input('title');
        $blogpost->content =$request->input('content');
        $blogpost->save();

        $request ->session ()->flash('status', 'Blog post Was Created!');

        return redirect()->route('posts.show',['post'=> $blogpost->id]);
    }
    
}
