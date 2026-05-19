INSERT INTO ressources (nom, type, capacite, description) VALUES
('Salle de réunion A', 'Salle de réunion', 10, 'Salle de réunion équipée d un projecteur et d une connexion Wi-Fi.'),
('Salle de réunion B', 'Salle de réunion', 20, 'Grande salle de réunion avec une table ovale et des chaises confortables.'),
('Bureau privé 1', 'Bureau privé', 2, 'Bureau privé pour deux personnes avec une vue sur la ville.'),
('Bureau privé 2', 'Bureau privé', 4, 'Bureau privé pour quatre personnes avec un espace de travail collaboratif.'),
('Espace de coworking', 'Espace de coworking', 50, 'Espace de coworking ouvert avec des bureaux partagés et des zones de détente.');

INSERT INTO creneaux (ressource_id, date_debut, date_fin, place_dispo, actif) VALUES
(1, '2024-07-01 09:00:00', '2024-07-01 10:00:00', 10, 1),
(1, '2024-07-01 10:00:00', '2024-07-01 11:00:00', 10, 1),
(2, '2024-07-01 09:00:00', '2024-07-01 11:00:00', 20, 1),
(3, '2024-07-01 09:00:00', '2024-07-01 17:00:00', 2, 1),
(4, '2024-07-01 09:00:00', '2024-07-01 17:00:00', 4, 1),
(5, '2024-07-01 09:00:00', '2024-07-01 17:00:00', 50, 1);