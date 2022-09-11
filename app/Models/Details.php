<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $table = 'details';
    protected $primaryKey = 'id';
    protected $fillable = ['firstname', 'lastname', 'email', 'mobile'];
}
