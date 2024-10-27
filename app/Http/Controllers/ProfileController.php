<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;

class ProfileController extends Controller
{
    public function __invoke(Request $request): Response
    {
        return inertia('Profile', [
            'user' => [
                'name' => 'Amitav Roy',
                'country' => 'India',
            ],
            'search' => $request->input('search', ''),
        ]);
    }
}
