<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected $fillable = [
        'admin_id',
        'topic_id',
        'info',
    ];
    public function topic()
    {
        return $this->belongsTo(Topic::class,'id','topic_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'id','id');
    }
}
