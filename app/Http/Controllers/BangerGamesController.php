<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BangerGamesController extends Controller
{
    /**
     * Endpoint: POST /test1
     * This endpoint should use BangerGamesMiddleware and check BANGER_GAMES=123qwe on request
     */
    public function test1()
    {
        // TODO: show "gamerId" int parameter from POST request as json response
    }

    /**
     * Endpoint: POST /test1
     * validate brackets in an expression sting like this:
     * ( 5 * 3 [ 6 ) - 6]
     *
     * detect if a string contains any unclosed brackets.
     * Input: exp = “[()]{}{[()()]()}”
     * Output: Balanced
     *
     * Input: exp = “[(])”
     * Output: Not Balanced
     *
     * {([]){}()} is balanced
     * {C{}[{[a]}RqhL]{y2}} is balanced
     * {([]){]()} is not balanced
     */
    public function test2()
    {
        // TODO: implement logic in new service and response format should be in JSON
    }
}
