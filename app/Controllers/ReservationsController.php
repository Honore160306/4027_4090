<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class ReservationsController extends Controller
{
 public function reservations()
    {
        return view('/client/reservations');
    }

    public function adminReservations()
    {
        return view('/admin/reservations');
    }
}