<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    public function creator()
    {
        return $this->belongsTo(User::class, 'pencipta_id');
    }
}
