<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	protected $fillable = [
		'districts',
		'surname',
		'first_name',
		'password',
		'gender',
		'phone_number',
		'email',
		'residential_address',
		'business_category',
		'business_name',
		'business_location',
		'discount_permitted',
		'payment_method',
		'subscription_mode',
		'monthly_subscription_rates',
		'quarterly_subscription_rates',
		'annually_subscription_rates',
		'rc_number',
		'delivery_services',
		'name_of_care_group_leader',
		'care_group',
		'telephone',
	];
}
