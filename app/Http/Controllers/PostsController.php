<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use App\category;
use App\Posts;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Posts = DB::select('SELECT * FROM posts JOIN categories WHERE posts.cat_id=categories.id');
        //$Posts = Posts::orderBy('id','desc')->with('category')->get();
        //return $Posts;
        return view('admin.news')->with('posts',$Posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cats= category::all();
        return view('admin.addnews')->with('cats', $cats);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //'image'=> 'image|nullable|max:1999'
        $this->validate($request,[
            'posttitle' => 'required',
            'category' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048'

        ]);
        if($request->hasFile('image')){
            //dd($request);
            $file = $request->file('image');

            $ext = $request->file('image')->getClientOriginalExtension();
            //$filen = pathinfo($file,PATHINFO_FILENAME);
            $filename = md5('_'.time()).'.'.$ext;
            //$path = public_path('file');
            //$request->file->move($path, $filename);
            $path = $request->file('image')->storeAs('public/admin/postimages',$filename,'public');
        }else{
            $filename = 'noimage.jpg';
        }


        $news = new Posts;
        $news->title = $request->input('posttitle');
        $news->cat_id = $request->input('category');
        $news->details = $request->input('body');
        $news->image = $filename;
        $news->status = 1;
        $news->type = $request->input('type');
        $news->save();
        return redirect('admin/posts')->with('success', 'Post Created');//$news->title;
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
        $post = Posts::find($id);
        $cats = category::all();
        //$post = DB::select('SELECT * FROM posts WHERE id='.$id);
        $data = [
            'cats'=>$cats,
            'post' => $post,
        ];
        //return $data['post'];
        return view('admin.viewnews')->with($data);
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
