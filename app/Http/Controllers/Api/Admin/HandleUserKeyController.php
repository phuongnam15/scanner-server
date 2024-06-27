<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HandleUserKeyController extends Controller
{
    function generateKey()
    {
        $userKey = "0c7a51bd3b0161438772e26636443a593fb9671d0b2af4abff7656f354c714bb";
        $salt = 'amai_scanner';

        $hashedKey = hash('sha256', $userKey . $salt);

        return $hashedKey;
    }
   
}
