<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'posts'; 


    protected $fillable = ['nama_layanan', 'deskripsi_layanan', 'alamat', 'kategori', 'kontak', 'image_url', 'alt','user_id', 'created_at', 'updated_at'];
    

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}

