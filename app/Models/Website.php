<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function subscribedUsers()
    {
        return $this->hasMany(Subscription::class, 'user_id');
    }
}
