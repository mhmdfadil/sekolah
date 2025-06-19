<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use  HasFactory, Notifiable;
    protected $table = 'kelas';
    protected $fillable = [
        'tingkatan',
        'unit',
    ];
}
