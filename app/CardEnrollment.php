<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardEnrollment extends Model
{
    protected $fillable = [
        'email_address',
        'church_group',
        'district',
        'dob',
        'gender',
        'surname',
        'firstname',
        'middlename',
        'mobile_number',
        'residential_address',
        'bvn',
    ];
}
