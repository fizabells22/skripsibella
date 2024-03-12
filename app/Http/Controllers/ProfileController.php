<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

     public function index()
{
    $user = User::findOrFail(Auth::id());

    return view('profile', compact('user'));
}

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function update(Request $request, $id)
{
    request()->validate([
        'name'       => 'required|string|min:2|max:100',
        'email'      => 'required|email|unique:users,email, ' . $id . ',id',
        'old_password' => 'nullable|string',
        'password' => 'nullable|required_with:old_password|string|confirmed|min:6'
    ]);

    $user = User::find($id);

    $user->name = $request->name;
    $user->email = $request->email;

    if ($request->filled('old_password')) {
        if (Hash::check($request->old_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->password)
            ]);
        } else {
            return back()
                ->withErrors(['old_password' => __('Please enter the correct password')])
                ->withInput();
        }
    }
    $user->save();

    return back()->with('status', 'Profile updated!');
}

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
