<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\BaseController;

class Status extends Controller
{
    public function index()
    {
        return view('user/status');
    }
}