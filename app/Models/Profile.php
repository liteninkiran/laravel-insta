<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =
    [
        'title',
        'description',
        'url',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profileImage()
    {
        $path  = '/storage/';
        $path .= ($this->image) ? $this->image : '/profile/1x8m8Es9BB1mU3q73n4xuCFYlihCLlG0e0YTo60D.png';

        return $path;
    }

    public function following()
    {
        return $this->belongsToMany(User::class);
    }

}
