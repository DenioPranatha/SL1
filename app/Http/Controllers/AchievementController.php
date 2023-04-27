<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index(String $id){
        $cards = Profile::all();
        $card = [];
        foreach($cards as $i){
            if($i['id'] == $id){
                $card = $i;
            }
        }

        return view('achievement', compact('card'), ["title" => "Profile"]);
    }

}
