<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function order() {
        $orders = Account::all();
        return view('admin.orders', ['orders' => $orders]);
    }

    public function create()
    {
        return view('createUser');
    }

    public function store(AccountRequest $request)
    {

        $user = new Account();
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->admin = 0;
        $user->offers_id = 1;

        $user->save();

        return redirect()->route('admin.users.create')->with('success', 'Użytkownik został utworzony');
    }
}
