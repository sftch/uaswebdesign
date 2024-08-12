<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    protected $table = 'sales';
    protected $fillable = ['name', 'description', 'start_date', 'end_date', 'contact_id', 'user_id'];
    protected $dates = ['start_date', 'end_date'];
}
