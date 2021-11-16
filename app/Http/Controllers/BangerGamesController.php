<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BangerGamesController extends Controller
{
    /**
     * Endpoint: POST /bangergames
     * This endpoint should use BangerGamesMiddleware and check BANGER_GAMES=123qwe on request
     */
    public function test()
    {
        // TODO: show "gamerId" int parameter from POST request as json response
    }
}
