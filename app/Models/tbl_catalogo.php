<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_catalogo extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_catalogo';
    public $table = "tbl_catalogo";
}