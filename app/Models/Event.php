<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'event_date',
        'is_membership_only'
    ];

    // Event → Banyak peserta
    public function registrations()
    {
        return $this->hasMany(EventRegistration::class);
    }
}
