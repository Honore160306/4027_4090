<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CreneauxModel;

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
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM ressources');
        $query2 = $db->query("SELECT * FROM creneaux JOIN ressources ON creneaux.ressource_id = ressources.id");
        $data = [
            'ressources' => $query->getResultArray(),
            'creneaux' => $query2->getResultArray()
        ];
        return view('admin/creneaux', $data);        
    }

    public function ajoutCreneaux()
    {
        $creneauxModel = new CreneauxModel();
        $creneauxModel->insert([
            'ressource_id' => $this->request->getPost('ressource_id'),
            'date_debut' => $this->request->getPost('date_debut'),
            'date_fin' => $this->request->getPost('date_fin'),
            'place_dispo' => $this->request->getPost('place_dispo'),
            'actif' => 1
        ]);
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM ressources');
        $query2 = $db->query("SELECT * FROM creneaux JOIN ressources ON creneaux.ressource_id = ressources.id");
        $data = [
            'ressources' => $query->getResultArray(),
            'creneaux' => $query2->getResultArray()
        ];

        return view('admin/creneaux', $data);    
    }
}