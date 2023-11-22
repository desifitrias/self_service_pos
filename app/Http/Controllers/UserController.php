<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = [
            'pageTitle' => 'Profil Pengguna',
            'content' => 'Ini adalah halaman profil pengguna.'
        ];
       
       return view('user', compact('data'));
    }

    // app/Http/Controllers/UserController.php


}
