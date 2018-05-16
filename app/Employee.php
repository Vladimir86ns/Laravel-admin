<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'id',
        'ime',
        'prezime',
        'mesto',
        'godiste',
        'broj_mobilnog',
        'broj_kucnog',
        'pozicija',
        'permissions',
        'pocetak_rada'
    ];
}
