<?php

namespace App\Http\Controllers;

use App\Companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompaniesController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'name' => 'required|string',
			'email' => 'required|email',
			'website' => 'string',
			'logo' => 'mimes:jpeg,bmp,jpg,png|between:1, 6000',
		]);

		if ($validator->fails()) {
			return redirect('post/create')
				->withErrors($validator)
				->withInput();
		}

		// Store the blog post...
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Companies $companies
	 * @return \Illuminate\Http\Response
	 */
	public function show(Companies $company)
	{
		return view('company.profile', ['user' => Companies::findOrFail($company)]);

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Companies $companies
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Companies $companies)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\Companies $companies
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Companies $companies)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Companies $companies
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Companies $companies)
	{
		//
	}
}
