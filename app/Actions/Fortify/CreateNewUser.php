<?php

namespace App\Actions\Fortify;

use App\Http\Controllers\MailController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $createUser = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'verification_code' => sha1(time()),
        ]);

        if ($createUser) {
            MailController::sendSignUpEmail($createUser->name, $createUser->email, $createUser->verification_code);

            return redirect()->route('register')->with(session()->flash('alert-success', 'Registrasi Berhasil. Cek Email Anda Untuk Verifikasi!'));
        }

        return redirect()->route('register')->with(session()->flash('alert-danger', 'Registrasi Gagal'));
    }

    public function verifyUser(Request $request)
    {
        $verification_code = Request::get('code');
        $getuser = User::where(['verification_code' => $verification_code])->update([
        'is_verified' => 1,
    ]);
        if ($getuser) {
            return redirect()->route('login');
        }
    }
}
