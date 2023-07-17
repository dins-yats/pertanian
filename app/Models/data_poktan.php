<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_poktan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['user'];

}
