<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function about(){
        return view('pages.about');
    }
    public function posts(){
        $posts = Post::orderBy('created_at', 'DESC')->paginate(5);
        return view('pages.posts.posts', ['posts'=>$posts]);
    }
    public function single($id){
        // если авторизирован переходим на страницу новости с возможностью комментирования
        if(\Auth::check()){
            // извлекаем из базы данных по id
            $post = Post::findOrFail($id);
            //$users = User::all();
            return view('pages.posts.single', ['post'=>$post, /*'users'=>$users*/]);
        }else{
            // иначе переходим на страницу новости без возможностью комментирования
            // извлекаем из базы данных по id
            $post = Post::findOrFail($id);
            return view('pages.posts.single', ['post'=>$post]);
        }
    }

    public function civilian(){
        return view('pages.services.civilian');
    }
    public function business(){
        return view('pages.services.business');
    }
}
