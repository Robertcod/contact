<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolicitudModel extends Model
{
    protected $table ='solicitudes';
    protected $fillable = ['name', 'email', 'message'];
}
