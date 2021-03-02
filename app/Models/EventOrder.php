<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventOrder extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(EventType::class);
    }

    public function format()
    {
        return $this->belongsTo(EventFormat::class);
    }

    public function style()
    {
        return $this->belongsTo(EventStyle::class);
    }
}
