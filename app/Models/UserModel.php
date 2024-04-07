<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $fillable=['Email','Phone','City','gender','password','role'];

    public function saveUser($user){
        $user['password']=convert_uuencode($user['password']);
        return self::create($user);
    }

    public function verifyUser($email){
        $user = self::where('email',$email)->first();
        return $user;
    }
}
