<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('new_post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $post=new \App\Post;
        $title=date("dd-mm-yyyy");
        $request_post=$request->all();
        $autor=$request_post["autor"];
        $title=$request_post["title"];
        $content=$request_post["content"];
        $image = $request->file('image');
        
        if($image!=null){
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $name);
            $url = asset("/images/".$name);
            $post->image_path=$url;
        }
       // dd($title,"\n".$autor,"\n".$content);
        if($title!=null){
            if($title!="\n"){
                $post->title=$title;
                $post->autor=$autor;
                $post->content=$content;
                $post->save();
                return back()->with('success','You have successfully upload image.');
            }
        }else
            return back()->with('error','Please,fill the request fileds');


        //dd($url);
        //$this->save();

        
        //Storage::disk('local')->put('file.txt', 'Contents');
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
