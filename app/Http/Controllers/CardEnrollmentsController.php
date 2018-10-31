<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CardEnrollment;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class CardEnrollmentsController extends Controller
{
	public function index()
	{
		// get all members from members model
		$cardenrollments = CardEnrollment::all();

		return view('card.list')->with(compact('cardenrollments'));
	}


	public function create()
	{
		// show the form
		return view('card.create');
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

		$enrollment = CardEnrollment::create($request->except('passport_name'));

		if ($request->hasFile('passport_name')) {
			$pathToFile = $request->file('passport_name')->store('passports');
			Log::debug($pathToFile);

			$enrollment->update(['passport_name' => $pathToFile]);
		}

        return Redirect::to('/member/pay')->with('message', 'Card enrolled successfully',
			'alert-class', 'alert-success');
	}

}
