<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    function notificationBy()
    {
        return $this->belongsTo(User::class, 'notification_by');
    }
}
