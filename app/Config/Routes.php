<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'AccueilController::accueil');
$routes->get('/creneaux', 'CreneauxController::creneaux');

$routes->get('/inscription', 'InscriptionController::inscription');
$routes->get('/connexion', 'ConnexionController::connexion'); 
$routes->post('/creationCompte', 'ConnexionController::creationCompte');

$routes->post('/verificationConnexion', 'DashboardController::verificationConnexion');
$routes->get('/client/reservations', 'ReservationsController::reservations');

$routes->get('/admin/reservations', 'ReservationsController::adminReservations');
$routes->get('/admin/creneaux', 'CreneauxController::adminCreneaux');

