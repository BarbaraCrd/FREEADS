<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'content', 'seller_id', 'buyer_id', 'ad_id', 'sendto', 'created_at', 'updated_at'
    ];
}
