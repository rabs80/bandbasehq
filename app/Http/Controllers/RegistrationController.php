<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function show($role = null)
    {
        $validRoles = ['band', 'venue', 'agent'];
        $role = in_array($role, $validRoles) ? $role : 'band';

        return view('auth.register', compact('role'));
    }

    public function submit(Request $request)
    {
        $role = $request->input('role');

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // if using confirm field
        ];

        if ($role === 'band') {
            $rules['band_name'] = 'required|string|max:255';
        } elseif ($role === 'venue') {
            $rules['venue_name'] = 'required|string|max:255';
        } elseif ($role === 'agent') {
            $rules['agency_name'] = 'required|string|max:255';
        }

        $validated = $request->validate($rules);

        // TODO: create user and optionally related Band, Venue, or Agency model

        return redirect()->route('dashboard')->with('success', 'Registration complete!');
    }
}
