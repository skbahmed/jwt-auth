<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    // MAKING ONE TO MANY RELATION WITH USER MODEL
    public function users()
    {
        return $this->hasMany(User::class, 'role_id', 'id'); //role_id is foreign key and id is local key
    }
}
