<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_emisor',
        'id_receptor',
        'mensaje',
        'fecha',
        'tipo',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'fecha' => 'datetime',
    ];

    /**
     * Get the user that sent the message.
     */
    public function emisor()
    {
        return $this->belongsTo(User::class, 'id_emisor');
    }

    /**
     * Get the user that received the message.
     */
    public function receptor()
    {
        return $this->belongsTo(User::class, 'id_receptor');
    }
}
