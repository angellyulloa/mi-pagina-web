<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumnosmodels extends Model
{
    protected $table="profesores";
    public $timestamps=false;
    protected $primarykey="RollNo";
    
    use HasFactory;
}


