<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Validator;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class PostController extends Controller
{

    public function sendPost(Request $request)
    {
        $data = $request->imageUrl;
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);

        $data = base64_decode($data);
        $image_name= time().'.png';
        if(!file_exists(public_path() . "/uploads/".auth()->user()->userName."/post-image/"))
        {
            mkdir(public_path() . "/uploads/".auth()->user()->userName."/post-image/",0755,true);
        }
        $imageUrl= public_path() . "/uploads/".auth()->user()->userName."/post-image/". $image_name;
        file_put_contents($imageUrl , $data);
        $postType="post";
        $roll=[
            "user_id" => "required|numeric",
            "body" =>  "required|min:1|max:5000|",
            "mood" =>  "required|alpha|max:10",
            "location" =>"alpha|max:30"
         ];

        if ($request->postType == "vip"){
            if (auth()->user()->credet >= 1000){
                $postType="vip";
            }
            else{
                alert()->success('خر خودتی!')->persistent('فهمیدی؟');
                return back();
            }
        }

//        $imageUrl=$this->uploadImage($request->file('image'),auth()->user());
        Validator::make($request->all(),$roll);
        Post::create([
            'user_id' => $request->user_id,
            'body' =>$request->body,
            'mood' =>$request->mood,
            'location' => $request->Location,
            'imageUrl' => $imageUrl,
            'postType' => $postType,
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
        $title = " عزیز!" . $post->user->firstName;
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
