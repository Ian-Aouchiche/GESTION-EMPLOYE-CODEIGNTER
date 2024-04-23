<?php

namespace App\Controllers;

use App\Models\User_Model;

class ConfirmationController extends BaseController
{
    public function conf()
    {
        return view('Confirmation');
    }

   
}
