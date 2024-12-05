<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'content',
        'email',
        'published_at',
        'deleted_at',
    ];

    public function category()
    {

        return $this->belongsTo(Category::class, 'category_id');
    }
}
