<?php

namespace App\Models;

use CodeIgniter\Model;

class DmdrdvModel extends Model
{
    protected $table = 'dmdrdv';
    protected $primaryKey = 'id';
    protected $allowedFields = ['sujet', 'user', 'date_demande', 'nom', 'prenom', 'date_naissance', 'telephone', 'adresse', 'mail'];

}
