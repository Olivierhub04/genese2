<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fichiers extends Model
{
    use HasFactory;

    protected $fillable = [
        'fichiers',
        'taille',
        'pars',
        'description',
    ];
}
