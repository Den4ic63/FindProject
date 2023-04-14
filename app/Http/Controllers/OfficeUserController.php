<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\User;
use Illuminate\Http\Request;

class OfficeUserController extends Controller
{

    public function store(Request $request,Office $office)
    {
        $userIds = $request->input('user_id');

        if (!$userIds) {
            return back()->withErrors('Please select at least one user');
        }
        $users = User::whereIn('id', $userIds)->get();

        if (count($userIds) !== count($users)) {
            return back()->withErrors('One or more selected users were not found');
        }

        $office->users()->attach($userIds);

        return redirect()->route('office.show', $office->id);
    }

    public function destroy(Request $request,Office $office)
    {
        $userIds = $request->input('user_id');

        if (!$userIds) {
            return back()->withErrors('Please select at least one user');
        }
        $users = User::whereIn('id', $userIds)->get();

        if (count($userIds) !== count($users)) {
            return back()->withErrors('One or more selected users were not found');
        }

        // Удаляем выбранных пользователей из офиса
        $office->users()->detach($userIds);

        return redirect()->route('office.show', $office->id);
    }
}
