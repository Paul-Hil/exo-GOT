<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\House;
use App\Models\HouseHasCharacter;

class CharacterController extends Controller
{
    public function index($id) {

        $character = Character::find($id);

        // Ancienne magouille un peu nul
        // $mother_id = $character->mother_id;
        // $mother = Character::find($mother_id);

        $title = $character->title()->first();
        $father = $character->father()->first();
        $mother = $character->mother()->first();

        $houseshasCharacter = HouseHasCharacter::where('character', $id)->get();

        foreach($houseshasCharacter as $househasCharacter) {
            $houses [] = House::find($househasCharacter->house);
        }

        $viewVars = [
            'title' => $title,
            'mother' => $mother,
            'father' => $father,
            'character' => $character,
            'houses' => $houses
        ];

        return view('partials/nav-bar') . view('layout/biographie', $viewVars);
    }
}
