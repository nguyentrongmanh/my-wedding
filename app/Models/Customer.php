<?php

namespace App\Models;

use App\Enums\CustomerResponse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',      // Add 'name' to the fillable property
        'email',
        'phone',
        'address',
        'nickname',
        'note',
        'response',
        'friend_of',
    ];

    public function getDisplayNameAttribute()
    {
        return $this->nickname ?? $this->name;
    }

    public function getInvitationUrlAttribute()
    {
        return route('invitation', $this->id);
    }

    public function getResponseTextAttribute()
    {
        if ($this->response === null) {
            return null;
        }
        return CustomerResponse::getDescription($this->response);
    }
}

