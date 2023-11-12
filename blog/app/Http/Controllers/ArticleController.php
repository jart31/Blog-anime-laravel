<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
{
    $articles = Post::where('published', true)->latest()->paginate(10); // Ajusta esta consulta según tus necesidades
    return view('articles', compact('articles'));
}
public function show(Post $post) // Laravel automáticamente resolverá el Post basado en el ID o slug pasado en la URL
{
    return view('articleshow', compact('post'));
}

}
