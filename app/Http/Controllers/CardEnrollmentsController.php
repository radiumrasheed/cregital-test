<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CardEnrollment;
use Illuminate\Support\Facades\Redirect;


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

        CardEnrollment::create($request->all());

        return Redirect::to('/')->with('message', 'Card enrolled successfully',
            'alert-class', 'alert-success');
    }



}
