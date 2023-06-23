<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'color',
        'selected'
    ];


    public function posts(): BelongsToMany 
    {
        return $this->belongsToMany(Post::class, 'category_post', 'post_id','category_id');
   }
}
