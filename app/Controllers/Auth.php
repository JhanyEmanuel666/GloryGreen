<?php 

namespace App\Controllers;

use App\Models\AdminModel;

class Auth extends BaseController
{
	
	public function __construct()
	{
		helper('form');
		$this->model = new AdminModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Login'
		];

		return view('auth/login', $data);
	}

	public function login()
	{
		$session 	= session();
        $model 		= new AdminModel();

        $username 	= $this->request->getPost('username');
        $password 	= $this->request->getPost('passwordd');

        $data 		= $model->where('username', $username)->first();

        if($data){
            $pass = $data['password'];

            if($pass == md5($password)){
                $ses_data = [
                    'id_user'       => $data['id_user'],
                    'user_name'		=> $data['username'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('admin_dashboard');
            }else{
                $session->setFlashdata('msg', 'Password Salah');
                return redirect()->to('auth');
            }
        }else{
            $session->setFlashdata('msg', 'Username Tidak ditemukan...');
            return redirect()->to('auth');
        }
	}

	public function logout()
	{
		$session = session();
		$session->destroy();

		return redirect()->to('auth/index');
	}
}
