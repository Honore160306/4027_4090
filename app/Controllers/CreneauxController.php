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
        $db = \config\Database::connect();
        $query = $db->query("SELECT * FROM creneaux JOIN ressources ON creneaux.ressource_id = ressources.id");
        $data['creneaux'] = $query->getResultArray(); 
        return view('/admin/creneaux', $data);
    }
}