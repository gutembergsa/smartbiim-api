<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;
 
    public $timestamps = false;

    protected $fillable = [
        'id_data',
        'resource_name',
        'manufacturer',
        'model',
        'serial_number',
        'acquisition_date',
    ];
}
