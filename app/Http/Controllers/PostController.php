<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Subscription;
use App\Models\User;
use App\Models\Website;
use App\Notifications\NewPostAlert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Symfony\Component\Console\Helper\Table;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $post = Post::create($request->all());

        // send out notification
        // get subscribed users for the website
        $website = Website::find($request->website_id);

        $subUsers = $website->subscribedUsers;

        foreach ($subUsers as $user) {
            Notification::send(User::find($user->user_id), new NewPostAlert($post));
        }
        return response()->json($post, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function show(Post $post)
    {
        return $post;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        return response()->json($post, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json($post, 204);
    }
}
