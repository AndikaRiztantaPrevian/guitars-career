<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $socialUser = Socialite::driver('google')->user();

        $registeredUser = User::where('google_id', $socialUser->id)->first();

        if (!$registeredUser) {
            $user = $this->createOrUpdateUser($socialUser);
            Auth::login($user);
            return $this->redirectUser($user);
        }

        Auth::login($registeredUser);
        return $this->redirectUser($registeredUser);
    }

    protected function createOrUpdateUser($socialUser)
    {
        return User::updateOrCreate(
            ['google_id' => $socialUser->id],
            [
                'name' => $socialUser->name,
                'email' => $socialUser->email,
                'password' => Hash::make('ioe1u9tgi02489hn12k3h809318hdnzxc391j3jf913jj'),
                'google_token' => $socialUser->token,
                'google_refresh_token' => $socialUser->refreshToken,
            ]
        );
    }

    protected function redirectUser($user)
    {
        $userIdEncrypt = encrypt($user->id);

        if (!$user->role) {
            return redirect('/set-account/' . $userIdEncrypt);
        } else {
            return redirect('/cari-kerja');
        }
    }

    public function indexRole($id)
    {
        return view('auth.role', ['id' => $id]);
    }

    public function postRole(Request $request, $id)
    {
        $validated = $this->validation($request);

        $this->processRole($validated, $id);

        return redirect()->route('kerja')->with('success', 'Berhasil memperbarui data akun anda!.');
    }

    protected function processRole($validated, $id)
    {
        $userIdDecrypt = $this->decryptId($id);

        $user = User::findOrFail($userIdDecrypt);
        $user->role = $validated['role'];
        $user->password = Hash::make($validated['password']);
        $user->save();
    }

    protected function validation(Request $request)
    {
        return $request->validate([
            'role' => 'required|in:user,owner',
            'password' => 'required|min:8|string|confirmed',
        ], [
            'role.required' => 'Anda harus memilih salah satu.',
            'role.in' => 'Data yang anda masukkan tidak valid.',
            'password.required' => 'Kata sandi harus diisi.',
            'password.string' => 'Kata sandi harus berupa huruf.',
            'password.min' => 'Kata sandi minimal 8 huruf.',
            'password.confirmed' => 'Password tidak sama dengan Konfirmasi passowrd.',
        ]);
    }

    protected function decryptId($id)
    {
        return decrypt($id);
    }
}
