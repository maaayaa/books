<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create()
    {
        return view('review');
    }
    public function store(Request $request)
    {
        $post = $request->all();
        
    if ($request->hasFile('image')) {
        $request->file('image')->store('/public/images');
        $data = ['user_id' => \Auth::id(), 'title' => $post['title'], 'body' => $post['body'], 'image' => $request->file('image')->hashName()];
        Review::insert($data);
        } else {
            $data = ['user_id' => \Auth::id(), 'title' => $post['title'], 'body' => $post['body']];
        }
        return redirect('/');
    }
}