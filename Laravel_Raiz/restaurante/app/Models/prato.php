<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prato extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'tipo', 'nome', 'preco', 'restaurante_id' ];
}
