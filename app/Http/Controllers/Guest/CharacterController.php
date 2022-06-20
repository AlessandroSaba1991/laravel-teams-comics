<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function show (Character $character){

        return view('guest.character.show',compact('character'));

    }
}


