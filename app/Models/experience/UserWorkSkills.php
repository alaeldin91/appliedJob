<?php

namespace App\Models\experience;

use Illuminate\Database\Eloquent\Model;

class UserWorkSkills extends Model
{

       protected $fillable = ['name'];

       public function skills()
       {
        
              return $this->hasMany(UserSkill::class);
       
       }
}
