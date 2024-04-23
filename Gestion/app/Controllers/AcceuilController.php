<?php

namespace App\Controllers;

use App\Models\User_Model;

class AcceuilController extends BaseController
{
    public function acceuil()
    {
        return view('Acceuil');
    }

   
}
