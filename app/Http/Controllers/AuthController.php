<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return ([
            'NIS' => '3103119118',
            'Nama' => 'Muhammad Haikal Azzam',
            'Gender' => 'Pria',
            'Phone' => '081226044715',
            'Class' => 'XII RPL 4'
        ]);
    }
}