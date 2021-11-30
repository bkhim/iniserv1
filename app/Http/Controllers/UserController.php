<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\User;
use App\Models\Website;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function subscribe(User $user, Website $website)
    {
        $subscribed = Subscription::where([
            'website_id' => $website->id,
            'user_id' => $user->id
        ])->get()->count();
        if ($subscribed == 0) {
            $user->subscriptions()->create([
                'website_id' => $website->id,
                'user_id' => $user->id
            ]);
        }

        return response()->json($user->subscriptions, 201);
    }
}
