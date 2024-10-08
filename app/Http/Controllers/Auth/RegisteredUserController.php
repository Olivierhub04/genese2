<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
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
        return view('auth.register');
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
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'type' => ['required', 'string', 'max:255'],
            'telephone' => ['integer', 'max:255'],
            'genre' => ['string', 'max:255'],
            'addresse' => ['string', 'max:255'],
            'cordonees' => ['string', 'max:255'],
            'ville' => ['string', 'max:255'],
            'etat' => ['string', 'max:255'],
            'site' => ['string', 'max:255'],
            'numero_de_tva' => ['string', 'max:255'],
            'statut_matrimonial' => ['string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'lname' => $request->lname,
            'email' => $request->email,
            'type' => $request->type,
            'telephone' => $request->telephone,
            'genre' => $request->genre,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
