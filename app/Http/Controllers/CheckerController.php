<?php

namespace App\Http\Controllers;

use App\Models\Checker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\CheckerRepository;
use Illuminate\Support\Facades\Hash;


class CheckerController extends Controller
{

    public function __construct(CheckerRepository $checkerRepository)
    {
        $this->checkerRepo = $checkerRepository;
    }

    public function login(Request $request)
    {
        if($this->checkerRepo->hasChecker($request->username)
            && Hash::check($request->password, $this->checkerRepo->getChecker()->password)) {

            // Access the current checker logged in with correct credentials.
            $checker = $this->checkerRepo->getChecker();

            // Generate temporary password.
            $generatedPassword = $this->checkerRepo
                            ->generatePassword($request->username, $request->password);

            return response()->json([
                'code'       => 200,
                'id'         => $checker->id,
                'username'   => $checker->username,
                'password'   => $generatedPassword,
                'firstname'  => $checker->firstname,
                'middlename' => $checker->middlename,
                'lastname'   => $checker->lastname,
                'suffix'     => $checker->suffix,
            ]);
        } else {
            return response()->json(['code' => 422, 'message' => 'Invalid username / password.']);
        }
    }
}
