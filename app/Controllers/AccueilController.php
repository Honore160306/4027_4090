<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AccueilController extends Controller
{
    public function accueil()
    {
        return view('accueil');
    }
}