<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedors';
    protected $fillable = ['nome'. 'id', 'uf', 'email' ];
}
