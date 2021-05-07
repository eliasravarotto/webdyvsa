<?php

namespace App;

use App\Notifications\ResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const USUARIO_VERIFICADO = '1';
    const USUARIO_NO_VERIFICADO = '0';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'avatar',
        'password',
        'verified',
        'verification_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
        'verification_token',
    ];

    public static function generateVerificationToken()
    {
        return str_random(40);
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'user_role');
    }

    public function hasRoles($rolesIds)
    {

        foreach ($rolesIds as $role_id) {
            foreach ($this->roles as $userRole) {
                if ($userRole->id === (int) $role_id) {
                    return true;
                }
            }
        }
        return false;
    }

    // Función copiada del archivo:
     // vendor\laravel\framework\src\Illuminate\Auth\Passwords\CanResetPassword.php     
     /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
}
