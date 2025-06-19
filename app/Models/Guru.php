<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use  HasFactory, Notifiable;
    protected $table = 'guru';
    protected $fillable = [
        'name',
        'nip',
    ];
}
