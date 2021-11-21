<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    protected $fillable = array(
        'user_id',
        'subject',
        'message',
        'department',
        'status',
        'reply_to'
    );

    public function tickets(){
        return $this->hasMany(Ticket::class,'reply_to','id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
