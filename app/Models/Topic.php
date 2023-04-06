<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable=[
      'topic_name',
      'admin_id'
    ];

    public function publication()
    {
        return $this->hasMany(Info::class,'topic_id','id');
    }
}
