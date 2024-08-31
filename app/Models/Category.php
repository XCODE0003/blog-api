<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    protected $fillable = ['name'];

    protected $casts = [
        'created_at' => 'datetime:F d, Y',
        'updated_at' => 'datetime:F d, Y',
    ];
}
