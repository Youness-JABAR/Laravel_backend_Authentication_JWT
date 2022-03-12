<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'section_id', 'class_id','name','gender','address','photo','password','email','phone'
    ];
}
