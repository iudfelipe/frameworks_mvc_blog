<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    function __Construct()
    {
        $this->middleware('permission:ver-post|crear-post|editar-post|borrar-post', ['only' => ['index']]);
        $this->middleware('permission:crear-post', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-post', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-post', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('dashboard.post.index', ['post' => $posts, 'category' => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('dashboard.post.create', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:15',
            'description'=>'required|min:2',
        ]);

        $post = new Post();
        $post->name = $request->input('name');
        $post->description = $request->input('description');
        $post->category_id = $request->input('category');
        $post->save();

        return view('dashboard.post.message', ['msg' => 'Publicación creada con exito']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('dashboard.post.edit', ['post' => $post, 'category' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|min:3|max:100',
            'description'=>'required|min:2',
        ]);

        $post = Post::find($id);
        $post->name = $request->input('name');
        $post->description = $request->input('description');
        $post->category_id = $request->input('category');
        $post->save();

        return view('dashboard.post.message', ['msg' => 'Publicación modificada con exito']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('dashboard/post');
    }
}
