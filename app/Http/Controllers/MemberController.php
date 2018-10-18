<?php

namespace App\Http\Controllers;

use App\Mail\MemberRegistered;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class MemberController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		// get all members from members model
		$members = Member::all();

		return view('member.list')->with(compact('members'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		// show the form
		return view('member.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store(Request $request)
	{
		// todo add validation

		// store new member in database
		$member = Member::create($request->all());

		// get email of member
		$member_email = $member->email;

		// send mail to the user
		Mail::to($member_email)->send(new MemberRegistered($member));

		// return success message
		return Redirect::to('/')
			->with('message', 'Member registered successfully', 'alert-class', 'alert-success');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Member $member
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show(Member $member)
	{
		return view('home');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Member $member
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Member $member)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\Member              $member
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Member $member)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Member $member
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Member $member)
	{
		//
	}


	/**
	 * Preview the email sent to the user if registered
	 *
	 * @param Member $member
	 *
	 * @return MemberRegistered
	 */
	public function preview(Member $member)
	{
		return new MemberRegistered($member);
	}
}
