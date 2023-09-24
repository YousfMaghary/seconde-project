<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showUsers()
    {
        return 'users data';
    }

    public function createPosts()
    {
        return view ('posts_creat') ;
    }
}
