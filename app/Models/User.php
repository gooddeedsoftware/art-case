<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'mobile',
        'country',
        'aboutnote',
        'password',
        'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function checkLike($id)
    {
        return Like::where('user_id', Auth::user()->id)->where('poetry_id', $id)->where('like_count', '1')->first();
    }
    
    public static function number_of_likes($id)
    {
        return Like::join('poetry', 'poetry.id', '=', 'likes.poetry_id')->where('poetry.user_id', $id)->where('likes.like_count', '1')->count();
    }
    
    public static function avarage_rating($id)
    {
        return Rating::join('art', 'art.id', '=', 'ratings.art_id')->where('art.user_id', $id)->avg('ratings.rating');
    }

    public function wishlist(){
        return $this->hasMany(Wishlist::class);
     }
}
