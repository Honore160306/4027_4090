<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FitspaceSeeder extends Seeder
{
	public function run(): void
	{
		// Compte admin (mot de passe : admin123)
		$this->db->table('users')->insert([
			'nom'        => 'Administrateur',
			'email'      => 'admin@fitspace.mg',
			'password'   => password_hash('admin123', PASSWORD_DEFAULT),
			'role'       => 'admin',
			'created_at' => date('Y-m-d H:i:s'),
		]);

		// Ressource de test
		$this->db->table('ressources')->insert([
			'nom'      => 'Salle Zen',
			'type'     => 'cours',
			'capacite' => 10,
		]);

		// Créneau de test (date dynamique)
		$this->db->table('creaneaux')->insert([
			'ressource_id' => 1,
			'date_debut'   => date('Y-m-d', strtotime('+1 day')).' 08:00:00',
			'date_fin'     => date('Y-m-d', strtotime('+1 day')).' 09:30:00',
			'places_dispo' => 10,
			'actif'        => 1,
		]);
	}
}
