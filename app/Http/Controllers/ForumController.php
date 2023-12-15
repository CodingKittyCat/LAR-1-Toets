<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        $posts = Post::all();
        return view('forum.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = Post::create([
            'subject' => $request['subject'],
            'content' => $request['content'],
            'user_id' => auth()->id(),
        ]);
        $post->save();
        return redirect()->route('forum.index')->with('success', 'Je hebt succesvol een post aangemaakt.');;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);

        return view('forum.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);
        $posts = Post::all();
        $this->validate($request, array(
            'subject' => 'required',
            'content' => 'required',
        ));

        $input = $request->all();
        $post->subject = $input['subject'];
        $post->content = $input['content'];
        $post->save();
        return redirect()->route('forum.index')->with('posts', $posts);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('forum.index');
    }
}
