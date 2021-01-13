<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Desafio01Controller extends Controller
{
    public function show(Request $request)
    {
        $number = 1;
        $sum    = 0;
        while ($number < $request->value) {
            if (($number % 3) == 0) {
                $sum = $sum + $number;
            } else if (($number % 5) == 0) {
                $sum = $sum + $number;
            }
            $number++;
        }
        return $sum;
    }
}
