<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user',
        'notes'
    ];

    public static function groups($user)
    {
        return Group::where('user', $user->id)->get();
    }
}
