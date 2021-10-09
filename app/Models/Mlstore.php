<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mlstore extends Model
{
    protected $fillable = ['input_username','input_email','input_number','input_password'];
}