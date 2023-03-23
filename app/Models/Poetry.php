<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Poetry extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'poetry';
    protected $fillable = [
        'title',
        'user_id',
        'description',
        'image',       
    ];
    
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
