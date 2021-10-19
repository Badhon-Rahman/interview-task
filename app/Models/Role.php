<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table='roles';
    protected $primaryKey = 'id';
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATEDTED_AT = 'updated_at';
    protected $name;
    protected $fillable = [
      'name',
  ];

    public function checkAuthentication($name)
    {
      $data=array('name'=>$name);
      DB::table('roles')->insert($data);
    }
}
