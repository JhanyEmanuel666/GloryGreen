<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin_Profile extends BaseController
{
    protected $helpers = ['form', 'url'];

    public function __construct()
    {
        $this->profile = new AdminModel();
        $this->session = session();
    }

    public function index()
    {
        $id = $this->session->get('id_user');

        $data = [
            'title'     => 'Profil',
            'profile'   => $this->profile->getUser($id)
        ];

        return view('admin/profile/index',$data);
    }

    public function update($id)
    {
        $image = $this->request->getFile('image_admin');

        if ($image->getError()==4) {
            $namaSampul = $this->request->getPost('img_lama');
        } else {
            $namaSampul = $image->getRandomName();
            $image->move('image/admin', $namaSampul);
            unlink('image/admin/' . $this->request->getPost('img_lama'));
        }
            $data = [
                'nama_lengkap' => $this->request->getPost('nama_userr'),
                'no_telp'      => $this->request->getPost('telpp'),
                'img_user'     => $namaSampul
            ];

            $ubah = $this->profile->updateUser($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Data berhasil terupdate');
                return redirect()->to(base_url('admin_profile'));
            }
        
    }
}
