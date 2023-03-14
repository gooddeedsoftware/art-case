<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Art extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'user_id',
        'size',
        'height',
        'width',
        'image',
        'price',
    ];

    public function artist()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
