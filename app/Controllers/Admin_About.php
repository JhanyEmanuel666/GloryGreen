<?php

namespace App\Controllers;

use App\Models\AboutModel;

class Admin_About extends BaseController
{
    protected $helpers = ['form', 'url'];

    public function __construct()
    {
        $this->about = new AboutModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'About',
            'about'      => $this->about->getAbout()
        ];
        
        return view('admin/about/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'about / add new'
        ];

        return view('admin/about/create', $data);
    }

    public function save()
    {
        $data = [
            'facebook'  => $this->request->getPost("fb"),
            'instagram' => $this->request->getPost("ig"),
            'twitter'   => $this->request->getPost("tw"),
            'about'     => $this->request->getPost("about")
        ];

        $simpan = $this->about->insertAbout($data);

        if ($simpan) {
            session()->setFlashdata('success', 'Data berhasil ditambahkan');
            return redirect()->to(base_url('admin_about'));
        }
    }

    public function show($id)
    {
        $data = [
            'title'     => 'about / show',
            'about'     => $this->about->getAbout($id)
        ];

        return view('admin/about/show', $data);
    }

    public function edit($id)
    {
        $data = [
            'title'     => 'about / edit',
            'about'     => $this->about->getAbout($id)
        ];

        return view('admin/about/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'facebook'  => $this->request->getPost("fb"),
            'instagram' => $this->request->getPost("ig"),
            'twitter'   => $this->request->getPost("tw"),
            'about'     => $this->request->getPost("about")
        ];

        $ubah = $this->about->updateAbout($data, $id);
        if ($ubah) {
            session()->setFlashdata('info', 'Data berhasil terupdate');
            return redirect()->to(base_url('admin_about'));
        }
        
    }

    public function delete($id)
    {
        $data = $this->about->getAbout($id);

        $hapus = $this->about->deleteAbout($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Data berhasil dihapus');
            return redirect()->to(base_url('admin_about'));
        }
    }
}
