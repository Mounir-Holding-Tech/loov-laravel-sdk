<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use LoovLaravelSdk\LoovService;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function test(){
        (new LoovService)->setKeys('asdf','sdf');
    }
}
