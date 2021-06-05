<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Barang extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'barang';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'nama',
        'harga'
    ];
}