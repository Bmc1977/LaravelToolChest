<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'group',
        'brand',
        'user',
        'cost',
        'quantity',
        'notes'
    ];

    public static function tools($user)
    {
        return Tool::where('user', $user->id)->get();
    }
}
