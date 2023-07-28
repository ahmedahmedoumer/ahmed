<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\player;

class PlayerController extends Controller
{
    //

    public function create(Request $request)
    {
         $check=player::create($request->all());
          return response()->json($check, 200);
    }
    // public function fetchData(Request $request)
    // {
    //      $check=Player::create($request->all());
    //       return response()->json($check, 200);
    // }
    // public function create(Request $request)
    // {
    //      $check=Player::create($request->all());
    //       return response()->json($check, 200);
    // }
    // public function create(Request $request)
    // {
    //      $check=Player::create($request->all());
    //       return response()->json($check, 200);
    // }
}
