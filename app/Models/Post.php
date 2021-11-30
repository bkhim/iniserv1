<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'website_id',
        'title',
        'content',
        'editor'
    ];

    public function editor()
    {
        return $this->belongsTo(User::class);
    }

    public function website()
    {
        return $this->belongsTo(Website::class);
    }
}
