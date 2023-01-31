<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlePlaca extends Model
{
    use HasFactory;

    protected $table = 'controle_placa';
    protected $fillable = ['name', 'phone','cpf','placa'];
}
