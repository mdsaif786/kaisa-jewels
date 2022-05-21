<?php

namespace App\Models;

use Carbon\Carbon;
use Hash;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use \DateTimeInterface;

class User extends Authenticatable
{
    use SoftDeletes, Notifiable;

    public $table = 'users';

    protected $hidden = [
        'remember_token',
        'password',
    ];

    const IS_ONLINE_SELECT = [
        '1' => 'Yes',
        '0' => 'No',
    ];

    const STATUS_SELECT = [
        '1' => 'Active',
        '0' => 'Inactive',
        '2' => 'Blocked',
    ];

    protected $dates = [
        'email_verified_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'status',
        'profile_photo',
        'default_address',
        'phone',
        'is_online',
        'country_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getIsAdminAttribute()
    {
        return $this->roles()->where('id', 1)->exists();
    }

    public function getEmailVerifiedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setEmailVerifiedAtAttribute($value)
    {
        $this->attributes['email_verified_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function address()
    {
        return $this->hasMany(Address::class, 'user_id');
    }

    public function addressWithLazy()
    {
        return $this->hasMany(Address::class, 'user_id')->with(['zone','country']);
    }

    
    public function getProfilePhotoAttribute($value)
    {
        return $value ?  $value
            : 'https://www.gravatar.com/avatar/'.md5(strtolower(trim($this->email)));
    }
}
