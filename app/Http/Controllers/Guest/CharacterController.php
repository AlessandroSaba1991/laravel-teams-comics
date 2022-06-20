<?php

namespace App\Http\Controllers\Guest;

use App\Character;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $characters = Character::all();
        return view('character.index', compact('characters'));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {
        return view('character.show', compact('character'));
    }
}
