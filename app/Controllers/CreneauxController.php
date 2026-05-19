<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class CreneauxController extends Controller
{
 public function creneaux()
    {
        return view('creneaux');        
    }

    public function adminCreneaux()
    {
        return view('admin/creneaux');        
    }
}