<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repos\UserRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }
    
    public function index()
    {
        $data['users'] = $this->userRepo->getUsers([
            'id',
            'user_type',
            'agent_id',
            'name',
            'email',
        ]);

        return view('users.index', $data);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_type' => 'required',
            'name' => 'required|unique:users',
            'email' => 'required','email','unique:users',
            'password' => 'required','same:confirm_password' 
        ]);

        $this->userRepo->storeUser(
                $request->user_type,
                $request->agent_id,
                $request->name,
                $request->email,
                Hash::make($request->password), 
        );
     
        return back()->with('success', 'Successfully created user.');
    }

    public function update(Request $request, string $userId)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'user_type' => ['required']
        ]);

        $this->userRepo->updateUserById(
                $userId,
                $request->user_type,
                $request->agent_id,
                $request->name,
                $request->email,
        );

        return back()->with('success', 'Successfully updated user.');
    }

    public function destroy(string $id)
    {
        $this->userRepo->getUserById($id, ['id']);

        $this->userRepo->deleteUserById($id);

        return back()->with('success', 'Successfully deleted user.');
    }
}
