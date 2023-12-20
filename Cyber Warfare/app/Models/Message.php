<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table ='messages';

    protected $primaryKey ='messageid';

    public $timestamps = false;

    protected $fillable=[
        'messageid',
        'userid',
        'content',
        'city'
    ];
}
