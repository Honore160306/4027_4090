<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class DashboardController extends Controller
{
 public function verificationConnexion()
    {
        $email = $this->request->getPost('email');
        $mdp = $this->request->getPost('mdp');

        $userModel = new UserModel();

        $userClient = $userModel
                    ->where('email', $email)
                    ->where('password', $mdp)
                    ->where('role', 'client')
                    ->first();

        $userAdmin = $userModel
                    ->where('email', $email)
                    ->where('password', $mdp)
                    ->where('role', 'admin')
                    ->first();

        if ($userClient) {
            return view('/client/dashboard');
        } else if ($userAdmin) {
            return view('/admin/dashboard');
        } else {
            return view('/connexion');
        }
    }
}