INSERT INTO users (nom, email, password, role) VALUES
('Honore', 'honore@gmail.com', 'honore', 'client'),
('Joshua', 'joshua@gmail.com', 'joshua', 'client'),
('Marino', 'marino@gmail.com', 'marino', 'client'),
('Admin', 'admin@gmail.com', 'admin', 'admin');

INSERT INTO ressources (nom, type, capacite, description) VALUES
('Yoga Detente', 'COURS', 10, 'Salle Zen · 2e étage'),
('CrossFit Intensif', 'COURS', 20, 'Grande salle'),
('Salle de Musculation', 'SALLE', 2, 'Salle de musculation avec équipements modernes.'),
('Salle de Réunion', 'SALLE', 4, 'Bureau privé avec un espace de travail collaboratif.'),
('Terrain de Tennis', 'TERRAIN', 50, 'Court A avec surface en dur');

INSERT INTO creneaux (ressource_id, date_debut, date_fin, place_dispo, actif) VALUES
(1, '2024-07-01 09:00:00', '2024-07-01 10:00:00', 10, 1),
(1, '2024-07-01 10:00:00', '2024-07-01 11:00:00', 10, 1),
(2, '2024-07-01 09:00:00', '2024-07-01 11:00:00', 20, 1),
(3, '2024-07-01 09:00:00', '2024-07-01 17:00:00', 2, 1),
(4, '2024-07-01 09:00:00', '2024-07-01 17:00:00', 4, 1),
(5, '2024-07-01 09:00:00', '2024-07-01 17:00:00', 50, 1);

INSERT INTO reservations (user_id, creneau_id, statut, created_at) VALUES
(1, 1, 0, '2024-06-20 12:00:00'),
(2, 1, 0, '2024-06-20 12:05:00'),
(3, 2, 0, '2024-06-20 12:10:00');