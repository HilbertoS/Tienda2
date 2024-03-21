<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Ciudad;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $ciudades = Ciudad::all();

        return view('auth.register', ['ciudades' => $ciudades]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'edad' => ['required', 'integer', 'between:11,99'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'ciudad' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'edad' => $request->edad,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'ciudad_id' => $request->ciudad
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/');
    }
}
