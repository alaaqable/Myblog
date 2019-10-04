<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use App\message;

class TestController extends Controller
{

    //Home page action
    public function Index(){
        //bring 3 random post
        $DisPost = posts::all()->random(3);
        return view ('Pages.index',compact('DisPost'));
    }

    //About page
    public function About(){
        return view('Pages.about');
    }

    //Contact page
    public function Contact(){
        return view('Pages.Contact');
    }
    //Store contact messages
    public function StoreContact(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => ['required','unique:messages'],
            'content' => 'required'
        ]);
            $message = new message();
            $message->name = $request->name;
            $message->email = $request->email;
            $message->content = $request->content;
            $message->save();
        return redirect('/Contact')->with('status','message was sent successfully !');
    }

    //Showing all posts
    public function posts()
    {
        //show data by desc order
        $posts = posts::orderby("id","desc")->paginate(6);
        //bring count
        $count = posts::count();
        return view('Pages.posts',compact('posts','count'));
    }

    //Show a single post
    public function Show($id)
    {
        //looking for post by id
        $post = posts::find($id);
        return view('Pages.post',compact('post'));
    }

    //create action
    public function create(){
        return view('Updating staff.create');
    }

    //store action
    public function store(Request $request){
        //Test for validation
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        //adding new post
        $post = new posts();
        $post->name = $request->name;
        $post->description = $request->description;
        $post->save();
        return redirect("posts")->with('status','created successfully !');
    }

    //edit action
    public function edit($id){
        $post = posts::find($id);
        return view('Updating staff.Update',compact('post'));
    }

    //update action
    public function update(Request $request,$id){
        //Test for validation
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        //Updating
        $post = posts::find($id);
        $post->name = $request->name;
        $post->description = $request->description;
        $post->save();
        return redirect('posts/'.$id)->with('status','updated successfully !');
    }

    //delete action
    public function destroy($id){
        $post = posts::find($id);
        $post->delete();
        return redirect('/posts')->with('status','deleted successfully !');
    }
}
