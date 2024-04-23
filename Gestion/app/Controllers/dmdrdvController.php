<?php

namespace App\Controllers;

use App\Models\User_Model;
use App\Models\DmdrdvModel;


class dmdrdvController extends BaseController
{
    public function dmdrdv()
    {
        // Récupérer la liste des utilisateurs depuis la base de données
        $userModel = new User_Model();
        $data['users'] = $userModel->findAll();

        return view('Dmdrdv', $data);
    }
    public function processDemande()
{
    // Récupérer les données du formulaire
    $sujet = $this->request->getPost('sujet');
    $idUser = $this->request->getPost('user');
    $nom = $this->request->getPost('nom');
    $prenom = $this->request->getPost('prenom');
    $dateNaissance = $this->request->getPost('date_naissance');
    $telephone = $this->request->getPost('telephone');
    $adresse = $this->request->getPost('adresse');
    $mail = $this->request->getPost('mail');


    // Enregistrer la demande de rendez-vous dans la base de données
    $dmdrdvModel = new DmdrdvModel();
    $data = [
        'sujet' => $sujet,
        'user' => $idUser,
        'date_demande' => date('Y-m-d H:i:s'),
        'nom' => $nom,
        'prenom' => $prenom,
        'date_naissance' => $dateNaissance,
        'telephone' => $telephone,
        'adresse' => $adresse,
        'mail' => $mail
    ];
    $dmdrdvModel->insert($data);

    // Rediriger l'utilisateur vers une page de confirmation
    return redirect()->to('/confirmation');
}

}

   

