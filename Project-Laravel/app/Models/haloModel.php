<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HaloModel extends Model
{
    use HasFactory;
    protected $table='halo_models';
    protected $fillable=['name','kelas','nis','date','email'];


    
}
