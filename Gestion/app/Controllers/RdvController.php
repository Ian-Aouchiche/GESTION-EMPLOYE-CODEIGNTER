<?php

namespace App\Controllers;

use App\Models\DmdrdvModel;

class RdvController extends BaseController
{
    public function rdv()
    {
        // Récupérer l'ID de l'utilisateur connecté (à remplacer par l'authentification appropriée)
        $userId = session()->get('user')['id']; // Supposons que l'ID de l'utilisateur soit stocké dans la session

        // Récupérer les rendez-vous de l'utilisateur connecté
        $rdvModel = new DmdrdvModel();
        $data['rdvs'] = $rdvModel->where('user', $userId)->findAll();

        return view('Rdv', $data);
    }
}
