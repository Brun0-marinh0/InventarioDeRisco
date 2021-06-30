<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
class Maquina extends Model
{
    use HasFactory;

    protected $fillable = ['unidade','tipo','nome_da_maquina', 'fabricante', 'modelo'];
}
