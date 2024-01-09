<?php

namespace App\Http\Controllers\Tweet;
use Illuminate\Support\Facades\Auth;
use App\Models\Tweet;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TweetStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): RedirectResponse
    {
       Tweet::create([
        'user_id' => Auth::id(),
        'content' => request('content')
       ]);

        return redirect()->back();
    }
}
