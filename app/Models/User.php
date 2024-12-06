<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable ,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 
        'email', 
        'email_verified_at', 
        'cellphone', 
        'password', 
        'role', 
        'id_tutor_actual',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
/** * Get the tutor assigned to the student. */ 
    public function tutor() { 
        return $this->belongsTo(User::class, 'id_tutor_actual'); 
    }

/** * Get the students assigned to the tutor. */ 
    public function students() {
        return $this->hasMany(User::class, 'id_tutor_actual');
     }

     /** * Get the reports created by the tutor. */ 
     public function reports() { 
        return $this->hasMany(ReporteIncidencia::class, 'id_tutor'); 
    } 
    
    /** * Get the incidents assigned to the student. */ 
    public function incidents() { 
        return $this->hasMany(ReporteIncidencia::class, 'id_alumno');
    } 
    
    /** * Get the messages sent by the user. */
    public function sentMessages() {
        return $this->hasMany(Mensaje::class, 'id_emisor');
     } 
     /** * Get the messages received by the user. */ 
     public function receivedMessages() { 
        return $this->hasMany(Mensaje::class, 'id_receptor');
     }
    
}
