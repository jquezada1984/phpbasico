<?php

namespace App\Controllers;

use App\Models\UserModel;


class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function auth()
    {

        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
         
        if ($data) {
            $pass = $data['password'];
            $verify_pass = false;
            if ($password == $pass)
               $verify_pass = true;
            //$verify_pass = password_verify($password, $pass); 
            
             
            if ($verify_pass) {
                $ses_data = [
                    'id'       => $data['id'],
                    'username' => $data['username'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/menu');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/home');
            }
        } else {
            $session->setFlashdata('msg', 'Username not Found');
            return redirect()->to('/home');
        }
    }

    public function prueba()
    {
        $model = new UserModel();
        $a=$model->ejecutarProcedimiento();
        print_r($a);
        die;
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/home');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
