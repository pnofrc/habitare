<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'made_by',
        'titolo',
        'coordinate',
        'calendario',
        'quando',
        'orario',
        'testo',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
   }

}
