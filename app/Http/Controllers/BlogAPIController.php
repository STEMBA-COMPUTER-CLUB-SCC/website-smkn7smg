<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogAPIController extends Controller
{
    public function berita() {
        $posts = Blog::where('category', 'berita')->latest()->get();
        return response()->json($posts);
    }

    public function prestasi() {
        $posts = Blog::where('category', 'prestasi')->latest()->get();
        return response()->json($posts);
    }

    public function detail($id) {
        $post = Blog::with('tags')->findOrFail($id);
        return response()->json($post);
    }

}