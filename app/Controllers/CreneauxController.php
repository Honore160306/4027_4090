<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class CreneauxController extends Controller
{
 public function creneaux()
    {
        $db = \config\Database::connect();
        $query = $db->query("SELECT * FROM creneaux JOIN ressources ON creneaux.ressource_id = ressources.id");
        $data['creneaux'] = $query->getResultArray();
        return view('creneaux', $data);        
    }

    public function adminCreneaux()
    {
        $db = \config\Database::connect();
        $query = $db->query("SELECT * FROM creneaux JOIN ressources ON creneaux.ressource_id = ressources.id");
        $data['creneaux'] = $query->getResultArray(); 
        return view('/admin/creneaux', $data);
    }
}