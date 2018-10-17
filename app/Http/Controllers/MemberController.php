<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
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
		// todo validation

		$member = Member::create($request->all());

		Session::flash('message', 'This is a message!');
		Session::flash('alert-class', 'alert-danger');

		return Redirect::to('/')->with('message', 'Member registered successfully');
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
}
