<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Pastikan Anda mengimpor model User jika belum melakukannya

class UserController extends Controller
{
    /**
     * Set user role to admin.
     *
     * @param  int  $userId
     * @return \Illuminate\Http\Response
     */
    public function setAdminRole($userId)
    {
        $user = User::find($userId);
        if (!$user) {
            // User tidak ditemukan
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->role = 'admin';
        $user->save();

        return response()->json(['message' => 'User role updated to admin'], 200);
    }

    /**
     * Check if user is admin.
     *
     * @param  int  $userId
     * @return \Illuminate\Http\Response
     */
    public function checkUserRole($userId)
    {
        $user = User::find($userId);
        if (!$user) {
            // User tidak ditemukan
            return response()->json(['message' => 'User not found'], 404);
        }

        if ($user->role === 'admin') {
            return response()->json(['message' => 'User is admin'], 200);
        } else {
            return response()->json(['message' => 'User is regular user'], 200);
        }
    }
}
