<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attachment;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()->with(['avatar','category'])->get();

       
        return view('page.blogs.postIndex',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = PostCategory::query()->get();
        return view('page.blogs.postCreate',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required','string'],
            'sub_title'=>['nullable','string'],
            'category_id'=>['required','numeric'],
            'post'=>['required','string'],
            'photo'=>['required','image']
        ]);
    
        $by_id = $request->user('web')->id;
        $title = $request->title;
        $sub_title = $request->sub_title;
        $category_id = $request->category_id;
        $body = $request->post;

        $avatar = Attachment::add($request->photo,Post::class);
        $avatar_id = $avatar->id;


        
        $data = compact('title','sub_title','category_id','body','by_id','avatar_id');

        Post::create($data);

        return redirect()->route('admin.blog.post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = PostCategory::query()->get();
        return view('page.blogs.postEdit',compact('post','categories'));
    }



    public function toggleActive(Post $post){
        $post->active = !$post->active;
        $post->save();

        return response()->json(['success'=>'successFully Done']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title'=>['required','string'],
            'sub_title'=>['nullable','string'],
            'category_id'=>['required','numeric'],
            'post'=>['required','string'],
            'photo'=>['required','image']
        ]);
        $oldAvatar = $post->avatar;
        $avatar_id = $post->avatar_id;
        $by_id = $request->user('web')->id;
        $title = $request->title;
        $sub_title = $request->sub_title;
        $category_id = $request->category_id;
        $body = $request->post;



    $data = compact('title','sub_title','category_id','body','by_id');

    $post->update($data);


        if($request->hasFile('photo')){
            $avatar = Attachment::add($request->photo,Post::class);
            $avatar_id = $avatar->id;
            $post->update(compact('avatar_id'));
            Attachment::remove($oldAvatar);
        }

        return redirect()->route('admin.blog.post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.blog.post.index');
    }
}
