<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ButtonController extends Controller
{
    function computerWeapon() {
        $weapons = [
            "Rock",
            "Paper",
            "Scissors"
        ];
        $index = rand(0, sizeof($weapons)-1);
        return response()->json(["weapon"=>$weapons[$index]]);
    }
}
