<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // =====================
    // RELASI
    // =====================

    // User → Membership (1 user punya 1 membership)
    public function membership()
    {
        return $this->hasOne(Membership::class);
    }

    // User → Orders (1 user bisa banyak pesanan)
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // User → Event Registration
    public function eventRegistrations()
    {
        return $this->hasMany(EventRegistration::class);
    }
}
