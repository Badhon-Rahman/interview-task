<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table='profiles';
    protected $primaryKey = 'id';
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATEDTED_AT = 'updated_at';
    protected $name;
    protected $email;
    protected $mobile;
    protected $userId;
    protected $roleId;
    protected $password;

    protected $fillable = [
      'name',
      'email',
      'mobile',
      'user_id',
      'role_id',
      'password',
  ];

    public function checkAuthentication($name, $email, $mobile, $userId, $password, $roleId)
    {
      $data=array('name'=>$name, 'email'=>$email, 'mobile'=>$mobile, 'user_id'=>$userId, 'password'=>$password, 'role_id'=>$password);
      DB::table('profiles')->insert($data);
    }
}
