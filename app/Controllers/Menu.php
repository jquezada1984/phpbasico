<?php
namespace App\Controllers;

use App\Models\UserModel;


class Menu extends BaseController
{
    public function index(): string
    {
        return view('menu');
    } 
}
