<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class PostController extends Controller
{
    public function createPost(Request $request) {
        if(auth()->check()) {
            $incomingFields = $request->validate([
                'title' => 'required',
                'body' => 'required'
            ]);
            $incomingFields['title'] = strip_tags($incomingFields['title']);
            $incomingFields['body'] = strip_tags($incomingFields['body']);
            $incomingFields['user_id'] = auth()->id();
            Post::create($incomingFields);
            return redirect('/home');
        } else {
            Session::flash('message', 'Please log in your account to post.');
            return redirect()->back();
        }
    }

    public function deletePost(Post $post, Request $request) {
        if(auth()->user()->id === $post['user_id']){
            $post->delete();
        }
        return redirect('/home');
    }

    public function showEditScreen(Post $post) {
        if(auth()->user()->id !== $post['user_id']){
            return redirect('/home');
        }
        return view('edit-post', ['post'=>$post]);
    }

    public function actuallyUpdatePost(Post $post, Request $request) {
        if(auth()->user()->id !== $post['user_id']) {
            return redirect('/home');
        }
        $incomingFields = $request->validate([
            'title'=>'required',
            'body'=>'required'
        ]);
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $post->update($incomingFields);
        return redirect('/home');
    }
}
