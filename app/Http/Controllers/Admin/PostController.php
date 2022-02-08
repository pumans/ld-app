<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostFormRequest;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(15);
        return view('admin.posts.index', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', ['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PostFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostFormRequest $request)
    {
        $data = $request->validated();
        if($request->has('image')){
            // сохраняем картинку
            $image = str_replace("public/posts", "", $request->file("image")->store("public/posts")) ;
            $data["image"] = $image;
        }
        $post = Post::create($data);

        return redirect()->route('admin.posts.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('admin.posts.create', [
            'post'=> $post,
            'categories'=>$categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PostFormRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostFormRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $data = $request->validated();
        if($request->has('image')){
            // сохраняем картинку
            $image = str_replace("public/posts", "", $request->file("image")->store("public/posts")) ;
            $data["image"] = $image;
        }
        $post->update($data);

        return redirect()->route('admin.posts.index');
    }

    /**
     * @param PostFormRequest $request
     * метод валидирования новости перед сохранением в БД
     * сохраняет картинку новости в локальной папке
     * @return array
     */
    protected function prepare(PostFormRequest $request): array
    {
        $data = $request->validated();
        if($request->has('image')){
            // сохраняем картинку
            $image = str_replace("public/posts", "", $request->file("image")->store("public/posts")) ;
            $data["image"] = $image;
        }
        return $data;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect(route('admin.posts.index'));
    }
}
