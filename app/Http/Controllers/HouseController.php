<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\House;
use App\Models\HouseHasCharacter;

class HouseController extends Controller
{
    public function list() {

        $houses = House::all();

        return view('partials/nav-bar') . view('layout/maisons', ['houses' => $houses]);
    }

    public function index($id)
    {
        $house = House::find($id);

        $HouseCharacter = HouseHasCharacter::where('house', $id)->get();
        foreach($HouseCharacter as $character_id) {
            $character = Character::where('id', $character_id->character)->get();
            $characters [] = $character[0];
        }
        $viewVars = [
            'house' => $house,
            'characters' => $characters
        ];

        return view('partials/nav-bar', ) . view('layout/homepage', $viewVars);
    }
}
