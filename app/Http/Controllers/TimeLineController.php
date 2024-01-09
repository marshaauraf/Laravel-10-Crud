<?php

namespace App\Http\Controllers;
use App\Models\Tweet;
use Illuminate\View\View;
use Illuminate\Http\Request;

class TimeLineController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        return view('timeline', [
            'tweets' => Tweet::latest('id')->get(),
        ]);
    }
}