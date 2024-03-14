<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Index.
     */
    public function index(): View
    {
        return view('user.index', [
            'users' => User::all()
        ]);
    }

    /**
     * Create.
     */
    public function create(): View
    {
        return view('user.create');
    }

    /**
     * Store.
     */
    public function store(Request $request): RedirectResponse
    {
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
 
        return redirect('/users');
    }

    /**
     * Details.
     */
    public function details(string $id): View
    {
        return view('user.details', [
            'user' => User::findOrFail($id)
        ]);
    }

    /**
     * Delete.
     */
    public function delete(string $id): RedirectResponse
    {
        $user = User::find($id);

        $user->delete();

        return redirect('/users');
    }
}
