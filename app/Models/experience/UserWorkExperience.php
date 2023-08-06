<?php

namespace App\Models\experience;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWorkExperience extends Model
{

    protected $fillable = [
    'jobTitleId'
    
    ,'company',
    
    'dateStart'
    
    ,'industryId'
    
    ,'userId'];

}
