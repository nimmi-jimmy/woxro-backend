<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    function blog(Request $req)
    {
        $blog = new Blog;
        // $blog->image=$req->file('image')->store('/uploads/blog');
        // $blog->profile=$req->file('profile')->store('/uploads/blog');
        if($req->hasFile('image'))
        {
            $file = $req->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'.$extension;
            $file->move('uploads/blog/',$filename);
            $blog->image = $filename;
        }

        if($req->hasFile('profile'))
        {
            $file = $req->file('profile');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'.$extension;
            $file->move('uploads/profile/',$filename);
            $blog->profile = $filename;
        }

        $blog->name=$req->input('name');
        $blog->date=$req->input('date');
        $blog->title=$req->input('title');
        $blog->description=$req->input('description');
        $blog->save();
        return $blog;
    }

    function blogs(Request $req)
    {
        return Blog::all();
        return $blog;
    }
}
