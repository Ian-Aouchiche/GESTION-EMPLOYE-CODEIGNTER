<?php

namespace App\Controllers;

use App\Models\AdminModel;

class AdminController extends BaseController
{
    public function admin()
    {
        return view('LoginAdmin'); // Vue pour la page de connexion admin
    }

    public function processlogin()
    {
        // Récupérer les données du formulaire
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Charger le modèle AdminModel
        $adminModel = new AdminModel();

        // Vérifier les informations de connexion
        $admin = $adminModel->where('username', $username)->first();

        if ($admin && $password === $admin['password']) {
            // Initialiser une session
            session()->start();

            // Stocker les informations de l'admin dans la session
            $_SESSION['admin'] = [
                'id' => $admin['id'],
                'username' => $admin['username']
                // Ajoutez d'autres données admin si nécessaire
            ];

            // Rediriger l'admin vers la page d'administration
            return redirect()->to('/dashboard');
        } else {
            // Informations de connexion invalides, afficher un message d'erreur
            return redirect()->back()->withInput()->with('error', 'Nom d\'utilisateur ou mot de passe incorrect.');
        }
    }
}
