<?php

namespace App\Controllers;
use App\Models\User_Model;


class GestionController extends BaseController
{
    public function gest()
    {
         // Charger le modèle UserModel
         $userModel = new User_Model();

         // Récupérer tous les utilisateurs depuis la base de données
         $data['users'] = $userModel->findAll();
        $userModel = new User_Model();

        return view('GestionAdmin', $data);
    }
    public function ajouter()
{
    // Récupérer les données du formulaire
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    $email = $this->request->getPost('email');
    $emploi = $this->request->getPost('emploi');

    // Vérifier la validité du mot de passe
    if (
        !preg_match('/[A-Z]/', $password) || // Vérifie s'il y a au moins une lettre majuscule
        !preg_match('/[0-9].*[0-9].*[0-9]/', $password) || // Vérifie s'il y a au moins trois chiffres
        !preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password) // Vérifie s'il y a au moins un caractère spécial
    ) {
        return redirect()->back()->withInput()->with('error', 'Le mot de passe doit contenir au moins une lettre majuscule, trois chiffres et un caractère spécial.');
    }

    // Charger le modèle User_model
    $userModel = new User_model();

    // Vérifier si l'email est déjà utilisé
    $existingUser = $userModel->where('email', $email)->first();
    if ($existingUser) {
        return redirect()->back()->withInput()->with('error', 'L\'email est déjà utilisé.');
    }

    // Vérifier si le nom d'utilisateur est déjà utilisé
    $existingUsername = $userModel->where('username', $username)->first();
    if ($existingUsername) {
        return redirect()->back()->withInput()->with('error', 'Le nom d\'utilisateur est déjà utilisé.');
    }

    // Insérer les données dans la base de données
    $data = [
        'username' => $username,
        'password' => password_hash($password, PASSWORD_DEFAULT), // Hasher le mot de passe
        'email' => $email,
        'emploi' => $emploi
    ];

    $userModel->insert($data);

    // Rediriger l'administrateur vers une page de confirmation ou une autre page
    return redirect()->to('/gestion');
}


    public function supprimer()
    {
        // Récupérer les identifiants des employés sélectionnés à partir du formulaire
        $selectedUsers = $this->request->getPost('selected_users');

        // Vérifier si des employés ont été sélectionnés
        if (!empty($selectedUsers)) {
            // Supprimer les employés sélectionnés de la base de données (à implémenter)
            $userModel = new \App\Models\User_Model();
            foreach ($selectedUsers as $userId) {
                $userModel->delete($userId);
            }

            // Rediriger vers une page de confirmation ou une autre page
            return redirect()->to('/gestion');
        } else {
            // Aucun employé sélectionné, rediriger vers une autre page ou afficher un message d'erreur
            return redirect()->to('/erreur');
        }
    }

    

    

 }



