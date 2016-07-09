<?php

namespace App\Http\Controllers;

use App\Post;

use App\Tag;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $posts = Post::latest()->get();
        
        return view('post', compact('posts'));
    }

    public function create()
    {
        $tags = Tag::lists('name', 'id');

        return view('create', compact('tags'));
    }

    public function store(Request $request)
    {
        $post = Post::create($request->all());

        $this->syncTags($post, $request->input('tag_list'));

        flash('Your post has been successfully created!');

        return redirect('post');
    }

    public function show(Post $post)
    {
        return view('show', compact('post', 'slug'));
    }

    public function edit(Post $post)
    {
        $tags = Tag::lists('name', 'id');

        return view('edit', compact('post', 'tags'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        $this->syncTags($post, $request->input('tag_list'));

        flash('Your post has been successfully updated!');

        return view('show', compact('post'));
    }

    public function destroy(Post $post)
    {
        $post->delete();

        flash('Your post has been deleted.');

        return redirect('post');
    }

    private function syncTags(Post $post, array $tags)
    {
        foreach ($tags as $tag){

            if (! Tag::find($tag)){

                $newTag = Tag::create(['name'=>$tag]);

                $tagArr[] = $newTag->id;
            }
            else {
                $tagArr[] = $tag;
            };
        };
        $post->tags()->sync($tagArr);
    }
}
