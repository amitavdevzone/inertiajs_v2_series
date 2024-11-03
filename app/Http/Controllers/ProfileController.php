<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller
{
    public function __invoke(Request $request): Response
    {
        return Inertia::render('Profile', [
            'user' => [
                'name' => 'Amitav Roy',
                'country' => 'India',
            ],
            'search' => $request->input('search', ''),
        ])->withViewData([
            'page_title' => 'Welcome to profile page'
        ]);
    }
}
