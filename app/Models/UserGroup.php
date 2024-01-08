<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function stakeholder()
    {
        return $this->hasMany(Stakeholder::class);
    }
}
