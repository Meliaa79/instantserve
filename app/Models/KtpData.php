<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KtpData extends Model
{
    use HasFactory;

    // Make sure all fields are fillable
    protected $table = 'ktp_data';
    protected $fillable = ['nik', 'full_name', 'address', 'dob', 'image_url']; 
}

