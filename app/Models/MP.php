<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MP extends Model
{
    use  HasFactory, Notifiable;
    protected $table = 'mp';
    protected $fillable = [
        'mp',
    ];
}
