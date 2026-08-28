<?php

namespace App\Models;

use App\Enums\VisitorsMessagesStatus;
use Illuminate\Database\Eloquent\Model;

class VisitorMessage extends Model
{
    protected $fillable = [
        'name',
        'email',
        'message',
        'status',
    ];

    protected $attributes = [
        'status' => VisitorsMessagesStatus::New->value,
    ];
}
