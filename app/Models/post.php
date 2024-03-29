<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class post extends Model
{
    use softDeletes;
    use HasFactory;
    protected $fillable = ['image', 'topic', 'title', 'article', 'user_id'];


    /**
     * Get the user that owns the post.
    */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
