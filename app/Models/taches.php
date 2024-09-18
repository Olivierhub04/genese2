<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taches extends Model
{
    use HasFactory;

    protected $fillable =[
        'titre',
        'statut',
        'date_du',
        'user_id',
        'etiquettes_id'
    ];
}
