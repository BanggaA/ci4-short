<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function __construct()
    {
        helper(['form']);
    }

    public function register()
    {
        $data = ['title' => 'register',];
        echo view('register', $data);
    }

    public function login()
    {
        $data = ['title' => 'login',];
        echo view('login', $data);
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }

    public function auth()
    {
        $session = session();
        $user_db = new UserModel();

        $name = $this->request->getVar('name');
        $password = $this->request->getVar('password');

        $data = $user_db->where('name', $name)->first();

        if ($data) {
            $pass = $data['password'];
            if ($password == $pass) {
                $ses_data = [
                    'name'     => $data['name'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Wrong Password ');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'user not Found');
            return redirect()->to('/login');
        }
    }

    public function add()
    {
        $rules = [
            'name'          => 'required|min_length[1]|max_length[20]',
            'password'      => 'required|min_length[1]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $user_db = new UserModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'password' => $this->request->getVar('password')
            ];
            $user_db->save($data);
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}
