sqlite3 database/4027_4090.db

CREATE table users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL, 
    role TEXT CHECK(role IN ('client', 'admin')) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE table ressources (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nom VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    capacite INTEGER NOT NULL, 
    description VARCHAR(255) NOT NULL
);

CREATE table creneaux (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    ressource_id INTEGER NOT NULL,
    date_debut DATETIME,
    date_fin DATETIME,
    place_dispo INTEGER NOT NULL,
    actif INTEGER NOT NULL,
    FOREIGN KEY (ressource_id) REFERENCES ressources(id)
);

CREATE table reservations (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    user_id INTEGER NOT NULL,
    creneau_id INTEGER NOT NULL,
    statut INTEGER NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (creneau_id) REFERENCES creneaux(id)
);

