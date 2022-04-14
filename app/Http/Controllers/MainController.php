<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\House;
use App\Models\HouseHasCharacter;
use App\Models\Title;

class MainController extends Controller
{
    public function home()
    {
        $characters = Character::all();

        foreach($characters as $key => $character) {
            $key+=1;
            $houseCharacter = HouseHasCharacter::where('character', $character->id)->get();
            $realHouse [] = House::find($houseCharacter[0]->house);
        }
        $house = null;

        $viewVars =  [
            'characters' => $characters,
            'houseCharacter' => $realHouse,
            'house' => $house
        ];

        return view('partials/nav-bar') . view('layout/homepage', $viewVars);
    }
}
