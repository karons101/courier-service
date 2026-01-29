<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    // Fields allowed for mass assignment
    protected $fillable = [
        'sender_name',
        'receiver_name',
        'receiver_address',
        'status',
        'tracking_id'
    ];
} 
