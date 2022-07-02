<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with(['tags', 'category'])->paginate(9); // Visualizzazione con relazione (nome dei metodi nelle tabelle pivot)
        return $posts;
    }
}
