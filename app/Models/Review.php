<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';
    protected $fillable = [
        'type',
        'user_id',
        'list_id',
        'review'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
