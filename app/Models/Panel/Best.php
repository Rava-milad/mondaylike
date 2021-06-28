<?php

namespace App\Models\Panel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Best extends Model
{
    use HasFactory;
    protected $fillable = [
        'group_title' , 'numbers' , 'date'
    ];
}
