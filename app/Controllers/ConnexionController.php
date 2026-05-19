<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class ConnexionController extends Controller
{
    public function connexion()
    {
        return view('connexion');
    }

    public function creationCompte()
    {
        $nom = $this->request->getPost('nom');
        $email = $this->request->getPost('email');
        $mdp = $this->request->getPost('mdp');
        $role = $this->request->getPost('role');

        $userModel = new UserModel();

        $userModel->insert([
            'nom' => $nom,
            'email' => $email,
            'password' => $mdp,
            'role' => $role
        ]);

        return view('connexion');
    }
}