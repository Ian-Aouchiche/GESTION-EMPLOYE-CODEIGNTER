<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('login', 'LoginController::login'); // Route pour la page de connexion
$routes->get('/testdatabase', 'TestDatabase::test');
$routes->get('/admin', 'AdminController::admin');
$routes->post('/signup/processSignup', 'SignupController::processSignup');
$routes->post('/login/processlogin', 'LoginController::processlogin');
$routes->get('logout', 'LogoutController::index');
$routes->get('/', 'AcceuilController::acceuil'); // Route pour la page de connexion
$routes->get('plan', 'PlanController::plan'); // Route pour la page de connexion
$routes->get('rdv', 'RdvController::rdv'); // Route pour la page de connexion
$routes->get('dmdrdv', 'dmdrdvController::dmdrdv'); // Route pour la page de connexion
$routes->post('dmdrdv/processDemande', 'dmdrdvController::processDemande');
$routes->get('confirmation', 'ConfirmationController::conf'); // Route pour la confirmation de rendez-vous
$routes->post('admin/processlogin', 'AdminController::processlogin');
$routes->get('dashboard', 'DashboardController::dash');
$routes->get('gestion', 'GestionController::gest');
$routes->post('gestion/ajouter', 'GestionController::ajouter');
$routes->post('gestion/supprimer', 'GestionController::supprimer');
// Routes.php


















