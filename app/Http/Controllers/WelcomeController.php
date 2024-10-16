<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // $user = User::find(id: 5);
        // User::query()->create([
        //     'name' => 'Pedro',
        //     'email' => 'pedro13@gmail.com',
        //     'password' => '123456',
        // ]);

        // $user->email_verified_at = now();

        // $user->save();


        // $user->update(['email_verified_at' => now()->subMonths(10)]);

        // dd($user->email_verified_at->diffForHumans());

        // Auth::login($user);

        return view(view: 'welcome');
    }
}
