<?php
namespace App\Controllers;

use App\Models\UserModel;


class Categoria extends BaseController
{
    public function index(): string
    {
        return view('categoria');
    } 
}
