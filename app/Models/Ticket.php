<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'email',
        'phone',
        'description',
        'reference',
        'is_opened',
    ];

    public function replies()
    {
        return $this->hasMany(TicketReply::class);
    }
}