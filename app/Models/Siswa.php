<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use  HasFactory, Notifiable;
    protected $table = 'siswa';
    protected $fillable = [
        'name',
        'nisn',
    ];
}
