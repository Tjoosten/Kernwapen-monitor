<?php

namespace App\Models;

use App\User;
use App\Repositories\ArticleRepository;
use Spatie\Tags\HasTags;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Article
 * 
 * @package Spatie\Tags\HasTags;
 */
class Article extends ArticleRepository
{
    use HasTags;

    /**
     * Mass-assignabl$e fields for the database table. 
     * 
     * @return array
     */
    protected $fillable = ['titel', 'status', 'content'];

    /**
     * Data relation for the author information. 
     * 
     * @return BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
