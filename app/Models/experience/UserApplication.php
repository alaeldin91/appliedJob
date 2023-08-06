<?php

namespace App\Models\experience;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserApplication extends Model
{

  protected $fillable =['jobTitleId',
                          'name',
                          'numberPhone',
                          'cvText',
                          'cv'
                          ,'company'
                          ,'dateStart'
                          ,'industry'
                          ,'higestLevel'
                          ,'school'
                          ,'dateComplated',
                          'nameSkills',
                          'userId'
                            ];
   
}
