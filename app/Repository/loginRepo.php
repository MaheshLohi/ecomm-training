<?php

namespace App\Repository;

use App\Models\Consumer;
use App\Models\Provider;
use Exception;
use Illuminate\Support\Facades\Hash;

class loginRepo
{

    public $consumerModel;
    public $providerModel;
    public function __construct(Consumer $consumerModel, Provider $providerModel)
    {
        $this->consumerModel = $consumerModel;
        $this->providerModel = $providerModel;
    }


    public function userLogin($email, $password)
    {

        $getpassword = $this->consumerModel->where('email', $email)
            ->pluck('password');
        try {
            if (Hash::check($password, $getpassword[0])) {
                $user = $this->consumerModel->where('email', $email)->get();
                session(['user' => json_decode(($user)[0])]);
            } else {
                return "Incorrect password";
            }
        } catch (Exception $e) {
            return "Email not found";
        }
    }

    public function adminLogin($email, $password)
    {
        $getpassword = $this->providerModel->where('email', $email)
            ->pluck('password');
        try {
            if (Hash::check($password, $getpassword[0])) {
                $user = $this->providerModel->where('email', $email)->get();
                session(['admin' => json_decode(($user)[0])]);
            } else {
                return "Incorrect password";
            }
        } catch (Exception $e) {
            return "Email not found";
        }
    }
}
