<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user',
        'notes'
    ];

    public static function categories($user)
    {
        return Category::where('user', $user->id)->get();
    }
}
