<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\userDetail;
use App\Produk;

class User extends Authenticatable
{
    protected $table = 'user';
    use Notifiable;

    function detail(){
    	return $this->hasOne(userDetail::class, 'id_user');
    }
    function produk(){
    	return $this->hasMany(Produk::class, 'id_user');
    }
    function getJenisKelaminStringAttribute(){
    	return ($this->jenis_kelamin == 1) ? "Laki-laki" : "Perempuan";
    }
    function setPasswordAttribute($value){
    	$this->attributes['password'] = bcrypt($value);
    }
    function setUsernameAttribute($value){
    	$this->attributes['username'] = strtolower($value);
    }
}
