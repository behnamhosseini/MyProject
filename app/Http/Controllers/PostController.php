<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function sendPost(Request $request)
    {
        Post::create([
            'user_id'=> auth()->user()->id,
            'body'=>$request->post,
            'mood'=>$request->mood,
        ]);
        return redirect()->back();
    }
    public function editPost(Post $post)
    {
        $this->validate(\request(), [
           'body' => 'required|string',
           'imageUrl' => 'required' ,
           'mood' => 'required|string' ,
            'location' => 'required'
        ]);
        $post->update([
            'body' => \request('body'),
            'imageUrl' => request('imageUrl'),
            'mood' => request('mood') ,
            'location' => request('location')
        ]);
        $title = " عزیز!" . $post->user->firstName;we
        alert()->success('پست مورد نظر با موفقیت ویرایش شد', $title)->persistent('اوکی');
        return back();
    }
    public function removePost(Post $post)
    {
        $post->delete();

        $title = " عزیز!" . $post->user->firstName;
        alert()->success('پست مورد نظر با موفقیت حذف شد', $title )->persistent('اوکی');
        return back();
    }
}
