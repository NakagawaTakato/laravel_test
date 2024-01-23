<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_one',
        'name_two',
        'sex_one',
        'sex_two',
        'sex_three',
        'email',
        'tel_one',
        'tel_two',
        'tel_three',
        'address',
        'address_2',
        'kids',
        'content'
    ];
}
