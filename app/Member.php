<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	protected $fillable = [
		'districts',
		'surname',
		'first_name',
		'gender',
		'phone_number',
		'email',
        'bank_name',
        'account_name',
        'account_no',
		'residential_address',
		'business_category',
		'business_name',
		'business_location',
		'discount_permitted',
		'payment_method',
        'rc_number',
		'care_group',
		'telephone',
	];
}
